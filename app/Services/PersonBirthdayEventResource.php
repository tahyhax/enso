<?php

namespace App\Services;

use LaravelEnso\Calendar\app\Enums\Frequencies;
use Illuminate\Http\Resources\Json\JsonResource;
use LaravelEnso\Calendar\app\Contracts\RoutableEvent;
use LaravelEnso\Calendar\app\Http\Resources\Calendar;

class PersonBirthdayEventResource extends JsonResource
{
    public function toArray($request)
    {
        $calendar = new DemoCalendar();

        return [
            'id' => $this->getKey(),
            'title' => $this->name.'BDay',
            'body' => 'Happy BDay',
            'start' => $this->birthday->format('Y-m-d H:i'),
            'end' => $this->birthday->format('Y-m-d H:i'),
            'location' => null,
            'calendar' => new Calendar($calendar),
            'frequence' => Frequencies::Yearly,
            'recurrenceEnds' => null,
            'allDay' => false,
            'readonly' => true,
            'class' => $calendar->color(),
            'route' => null,
            'deletable' => false,
            'resizable' => false,
        ];
    }

    private function route()
    {
        return $this->resource instanceof RoutableEvent
            ? $this->resource->route()->toArray()
            : null;
    }
}
