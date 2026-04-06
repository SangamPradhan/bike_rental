<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // permissions for each menu item
        $permissions = [
            'adminservices',
            'testimonials',
            'galleries',
            'bookings',
            'news',
            'staffs',
            'faqs',
            'popups',
            'careers',
            'payments',
            'international_bookings',
            'notices',
            'users',
            'brands',   // New fleet permission
            'vehicles', // New fleet permission
        ];

        // Create permissions using firstOrCreate for idempotency
        foreach ($permissions as $permission) {
            $this->createAutoAllPermissions($permission);
        }

        // Assign permissions to roles
        $admin = Role::findByName('admin');
        if ($admin) {
            foreach ($permissions as $permission) {
                $this->giveAutoAllPermissions($admin, $permission);
            }
        }

        $staffPermissions = ['news']; // staff permission
        $staff = Role::findByName('staff');
        if ($staff) {
            foreach ($staffPermissions as $permission) {
                $this->giveAutoAllPermissions($staff, $permission);
            }
        }
    }

    /**
     * Create base and common sub-permissions if they don't exist.
     */
    function createAutoAllPermissions($permission)
    {
        $perms = [
            $permission,
            $permission . '.create',
            $permission . '.edit',
            $permission . '.show',
            $permission . '.delete',
        ];

        foreach ($perms as $p) {
            Permission::firstOrCreate(['name' => $p, 'guard_name' => 'web']);
        }
    }

    /**
     * Safely assign a permission and its common CRUD sub-permissions to a role.
     */
    function giveAutoAllPermissions($role, $permission)
    {
        $perms = [
            $permission,
            $permission . '.show',
            $permission . '.create',
            $permission . '.edit',
            $permission . '.delete',
        ];

        foreach ($perms as $p) {
            if (!$role->hasPermissionTo($p)) {
                $role->givePermissionTo($p);
            }
        }
    }
}
