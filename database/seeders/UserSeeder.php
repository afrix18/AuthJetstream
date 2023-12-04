<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => bcrypt('admin')
        ]);
        $admin->assignRole('admin');

        $pengunjung = User::create([
            'name' => 'pengunjung',
            'email' => 'pengunjung@email.com',
            'password' => bcrypt('pengunjung')
        ]);
        $pengunjung->assignRole('pengunjung');
    }
}
