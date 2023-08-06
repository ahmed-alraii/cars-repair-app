<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create(
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Aa123456'),
                'role_id' => User::$ADMIN
            ]
        );
        User::create(
            [
                'name' => 'Employee',
                'email' => 'emp@gmail.com',
                'password' => Hash::make('Aa123456'),
                'role_id' => User::$EMPLOYEE
            ]
        );
    }
}
