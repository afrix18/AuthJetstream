<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permission::create(['name' => 'tambah-user']);
        Permission::create(['name' => 'hapus-user']);
        Permission::create(['name' => 'homepage']);

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'pengunjung']);

        $roleAdmin = Role::findByName('admin');
        $roleAdmin->givePermissionTo(['tambah-user', 'hapus-user', 'homepage']);

        $rolePengunjung = Role::findByName('pengunjung');
        $rolePengunjung->givePermissionTo('homepage');
    }
}
