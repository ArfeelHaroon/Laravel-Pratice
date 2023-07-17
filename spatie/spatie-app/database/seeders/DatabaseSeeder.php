<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Permission::create(['name' => 'edit articles', 'title' => 'Edit articles', 'group' => 'writer']);
        Permission::create(['name' => 'delete articles', 'title' => 'Delete articles', 'group' => 'writer']);
        Permission::create(['name' => 'publish articles', 'title' => 'Publish articles', 'group' => 'writer']);
        Permission::create(['name' => 'unpublish articles', 'title' => 'Unpublish articles', 'group' => 'writer']);

        Permission::create(['name' => 'view users', 'title' => 'View users', 'group' => 'admin']);
        Permission::create(['name' => 'delete users', 'title' => 'Delete users', 'group' => 'admin']);
        Permission::create(['name' => 'edit users', 'title' => 'Edit users', 'group' => 'admin']);

        $writerRole = Role::create(['name' => 'writer', 'title' => 'Writer', 'is_deleteable' => '0'])->givePermissionTo(['edit articles', 'delete articles', 'publish articles', 'unpublish articles']);

        $adminRole = Role::create(['name' => 'admin', 'title' => 'Admin', 'is_deleteable' => '0'])->givePermissionTo(['view users', 'delete users', 'edit users']);

        $superAdminRole = Role::create(['name' => 'super_admin', 'title' => 'Super Admin', 'is_deleteable' => '0'])->givePermissionTo(Permission::all());

    }
}