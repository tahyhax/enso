<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class InsertCourseFinancialsPermissions extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'account.courseFinancials', 'description' => 'Course Financials Group',
    ];

    protected $permissions = [
        ['name' => 'account.courseFinancials.initTable', 'description' => 'Course Financials initTable', 'type' => 0, 'default' => false],
        ['name' => 'account.courseFinancials.getTableData', 'description' => 'Course Financials getTableData', 'type' => 0, 'default' => false],
        ['name' => 'account.courseFinancials.exportExcel', 'description' => 'Course Financials exportExcel', 'type' => 0, 'default' => false],
    ];
}
