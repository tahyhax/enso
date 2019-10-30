<?php

namespace App\Providers;

use App\Services\DemoCalendar;
use LaravelEnso\Calendar\app\Facades\Calendars;
use LaravelEnso\Calendar\CalendarServiceProvider as ServiceProvider;

class CalendarServiceProvider extends ServiceProvider
{
    protected $register = [
        DemoCalendar::class,
    ];

    public function boot()
    {
        Calendars::register($this->register);
    }
}
