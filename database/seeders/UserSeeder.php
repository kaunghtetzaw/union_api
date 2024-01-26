<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 'admin',
            ],
            // M&E Manager
            [
                'name' => 'M&E Manager',
                'email' => 'm&emanager@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 'm&e_manager',
            ],
            // Project manager
            [
                'name' => 'Project manager',
                'email' => 'progjectmanager@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 'project_manager',
            ],
            // Volunteer
            [
                'name' => 'Volunteer',
                'email' => 'volunteer@mail.com',
                'password' => Hash::make('12345678'),
                'role' => 'volunteer',
            ]
        ]);
    }
}
