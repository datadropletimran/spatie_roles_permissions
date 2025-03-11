<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'admin-view',
            'admin-create',
            'role-view',
            'role-create',
            'post-view',
            'post-create',
        ];
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }

        // find admin role
        $admin_role = Role::where('name', 'admin')->first();
        // assign all permissions to admin role
        $admin_role->syncPermissions($permissions);


        // find publisher role
        $publisher_role = Role::where('name', 'publisher')->first();
        // assign permission to publisher role
        $publisher_role->syncPermissions(['post-view', 'post-create']);


        // find staff role
        $staff_role = Role::where('name', 'staff')->first();
        // assign permission to staff role
        $staff_role->syncPermissions(['admin-view']);


    }
}
