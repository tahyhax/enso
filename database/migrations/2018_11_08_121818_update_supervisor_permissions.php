<?php

use Illuminate\Database\Migrations\Migration;
use LaravelEnso\MenuManager\app\Models\Menu;
use LaravelEnso\PermissionManager\app\Models\Permission;
use LaravelEnso\RoleManager\app\Models\Role;

class UpdateSupervisorPermissions extends Migration
{
    public function up()
    {
        $supervisor = Role::whereName('supervisor')->first();
        $accountMenu = Menu::whereName('Account')->first();
        $permissions = Permission::where('name', 'like', '%account.%')->get();

        $supervisor->menus()->sync([$accountMenu->id]);
        $supervisor->permissions()->attach($permissions->pluck('id')->toArray());
        $supervisor->menu_id = $accountMenu->id;
        $supervisor->save();
    }

    public function down()
    {
        $supervisor = Role::whereName('supervisor')->first();
        $supervisor->menus()->sync(Menu::pluck('id')->toArray());
    }
}
