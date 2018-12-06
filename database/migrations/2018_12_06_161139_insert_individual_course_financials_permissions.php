<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class InsertIndividualCourseFinancialsPermissions extends StructureMigration
{
    protected $permissionGroup = [
        'name' => 'account.individual.courseFinancials', 'description' => 'Individual Course Financials Group',
    ];

    protected $permissions = [
        ['name' => 'account.individual.courseFinancials.initTable', 'description' => 'Individual Course Financials initTable', 'type' => 0, 'default' => false],
        ['name' => 'account.individual.courseFinancials.getTableData', 'description' => 'Individual Course Financials getTableData', 'type' => 0, 'default' => false],
        ['name' => 'account.individual.courseFinancials.exportExcel', 'description' => 'Individual Course Financials exportExcel', 'type' => 0, 'default' => false],
    ];
}
