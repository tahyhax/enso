<?php

namespace App\Services;

use Carbon\Carbon;
use Illuminate\Support\Collection;
use LaravelEnso\People\app\Models\Person;
use LaravelEnso\Calendar\app\Contracts\Calendar;
use LaravelEnso\Calendar\app\Contracts\CustomCalendar;

class DemoCalendar implements Calendar, CustomCalendar
{
    public function getKey()
    {
        return 'my_id_1';
    }

    public function name(): string
    {
        return 'Demo Calendar';
    }

    public function color(): string
    {
        return 'green';
    }

    public function private(): bool
    {
        return false;
    }

    public function readonly(): bool
    {
        return true;
    }

    public function events(Carbon $startDate, Carbon $endDate): Collection
    {
        return Person::query()
            ->whereRaw("DATE_FORMAT(birthday, '%m-%d') >= ? ", [$startDate->format('m-d')])
            ->whereRaw("DATE_FORMAT(birthday, '%m-%d') <= ? ", [$endDate->format('m-d')])
            ->get()
            ->map(function ($person) use ($startDate) {
                return new PersonBirthdayEvent($person, $startDate->year);
            });
    }
}
