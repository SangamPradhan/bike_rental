<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // permissions for each menu item
        $permissions = [
            'reset_passwords',
            'profile'

        ];

        //  permissions for each menu item
        foreach ($permissions as $permission) {
            $this->createAutoAllPermissions($permission);
        }

        //  permissions to roles
        $adminPermissions = $permissions; // admin permissions
        $staffPermissions = $permissions; // staff permission 

        $admin = Role::findByName('admin');
        foreach ($permissions as $permission) {
            $this->giveAutoAllPermissions($admin, $permission);
        }
        $staff = Role::findByName('staff');
        foreach ($staffPermissions as $permission) {
            $this->giveAutoAllPermissions($staff, $permission);
        }

    }

    function createAutoAllPermissions($permission)
    {
        Permission::create(['name' => $permission]);
        Permission::create(['name' => $permission . '.create']);
        Permission::create(['name' => $permission . '.edit']);
        Permission::create(['name' => $permission . '.show']);
        Permission::create(['name' => $permission . '.delete']);
    }

    function giveAutoAllPermissions($role, $permission)
    {
        $role->givePermissionTo($permission);
        $role->givePermissionTo($permission . '.show');
        $role->givePermissionTo($permission . '.create');
        $role->givePermissionTo($permission . '.edit');
        $role->givePermissionTo($permission . '.delete');
    }
}


