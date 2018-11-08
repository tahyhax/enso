<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class InsertCourseSchedulesPermissions extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'account.courseSchedules', 'description' => 'Course Schedules Group',
    ];

    protected $permissions = [
        ['name' => 'account.courseSchedules.initTable', 'description' => 'Course Schedules initTable', 'type' => 0, 'default' => false],
        ['name' => 'account.courseSchedules.getTableData', 'description' => 'Course Schedules getTableData', 'type' => 0, 'default' => false],
        ['name' => 'account.courseSchedules.exportExcel', 'description' => 'Course Schedules exportExcel', 'type' => 0, 'default' => false],
    ];
}
