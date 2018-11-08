<?php

use LaravelEnso\StructureManager\app\Classes\StructureMigration;

class CreateAccountMenuStructure extends StructureMigration
{
    protected $menu = [
        'name' => 'Account', 'icon' => 'fa fa-fw fa-user-o', 'link' => 'account/main/index', 'has_children' => false,
    ];

    protected $permissionGroup = [
        'name' => 'account.main', 'description' => 'Account Group',
    ];

    protected $permissions = [
        ['name' => 'account.main.index', 'description' => 'Account Index', 'type' => 0, 'default' => false],
    ];
}
