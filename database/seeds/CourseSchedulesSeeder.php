<?php

use App\CourseSchedule;
use Illuminate\Database\Seeder;

class CourseSchedulesSeeder extends Seeder
{

    public function run()
    {
        $schedules = [
            [
                'name'      => 'Limba romana',
                'type'      => 'meditatii',
                'location'  => 'Asociatia Top',
                'monday'    => '19:00',
                'tuesday'   => null,
                'wednesday' => null,
                'thursday'  => null,
                'friday'    => null,
                'saturday'  => null,
                'sunday'    => null,
            ],
            [
                'name'      => 'Limba engleza',
                'type'      => 'meditatii',
                'location'  => 'Asociatia Top',
                'monday'    => null,
                'tuesday'   => '19:00',
                'wednesday' => null,
                'thursday'  => null,
                'friday'    => '19:00',
                'saturday'  => null,
                'sunday'    => '19:00',
            ],
            [
                'name'      => 'Matematica',
                'type'      => 'meditatii',
                'location'  => 'Asociatia Top',
                'monday'    => null,
                'tuesday'   => 'anulat',
                'wednesday' => null,
                'thursday'  => '19:00',
                'friday'    => null,
                'saturday'  => null,
                'sunday'    => null,
            ],
            [
                'name'      => 'Istorie',
                'type'      => 'meditatii',
                'location'  => 'Asociatia Top',
                'monday'    => '18:00',
                'tuesday'   => null,
                'wednesday' => '20:00',
                'thursday'  => null,
                'friday'    => '20:00',
                'saturday'  => null,
                'sunday'    => '18:00',
            ],
        ];

        foreach ($schedules as $schedule) {
            $this->create($schedule);
        }
    }

    private function create($schedule)
    {
        (new CourseSchedule($schedule))->save();
    }
}
