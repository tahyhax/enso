<?php
/**
 * Created with luv for smarthelper.
 * User: mihai
 * Date: 11/8/18
 * Time: 10:47 AM.
 */

namespace App\DataTable;

use LaravelEnso\DataTable\app\Classes\TableStructure;

class CourseSchedulesTableStructure extends TableStructure
{
    public function __construct()
    {
        $this->data = [

            'tableName'     => __('Course Schedules'),
            'crtNo'         => __('#'),
            'headerAlign'   => 'center',
            'bodyAlign'     => 'center',
            'render'        => [3, 4, 5, 6, 7, 8, 9],
            'notSearchable' => [],
            'boolean'       => [],
            'appends'       => [],
            'columns'       => [

                0 => [
                    'label' => __('Course Name'),
                    'data'  => 'name',
                    'name'  => 'name',
                ],
                1 => [
                    'label' => __('Type'),
                    'data'  => 'type',
                    'name'  => 'type',
                ],
                2 => [
                    'label' => __('Location'),
                    'data'  => 'location',
                    'name'  => 'location',
                ],
                3 => [
                    'label' => __('Mo'),
                    'data'  => 'monday',
                    'name'  => 'monday',
                ],
                4 => [
                    'label' => __('Tu'),
                    'data'  => 'tuesday',
                    'name'  => 'tuesday',
                ],
                5 => [
                    'label' => __('We'),
                    'data'  => 'wednesday',
                    'name'  => 'wednesday',
                ],
                6 => [
                    'label' => __('Th'),
                    'data'  => 'thursday',
                    'name'  => 'thursday',
                ],
                7 => [
                    'label' => __('Fr'),
                    'data'  => 'friday',
                    'name'  => 'friday',
                ],
                8 => [
                    'label' => __('Sa'),
                    'data'  => 'saturday',
                    'name'  => 'saturday',
                ],
                9 => [
                    'label' => __('Su'),
                    'data'  => 'sunday',
                    'name'  => 'sunday',
                ],
            ],
        ];
    }
}
