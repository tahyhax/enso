<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateIndividualAccountMenuStructure extends StructureMigration
{
    protected $menu = [
        'name' => 'Individual Account', 'icon' => 'fa fa-fw fa-user-circle-o', 'link' => 'account/individual/index', 'has_children' => false,
    ];

    protected $permissionGroup = [
        'name' => 'account.individual', 'description' => 'Individual Account Group',
    ];

    protected $permissions = [
        ['name' => 'account.individual.index', 'description' => 'Individual Account Index', 'type' => 0, 'default' => false],
    ];
}
