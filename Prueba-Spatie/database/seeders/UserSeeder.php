<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'email' => 'admincamilo@gmail.com',
            'password' => Hash::make('admin12345'),
        ])->assignRole('admin');
        User::create([
            'name' => 'manager',
            'email' => 'manager@gmail.com',
            'password' => Hash::make('manager12345'),
        ])->assignRole('manager');
        User::create([
            'name' => 'users 1',
            'email' => 'users1@gmail.com',
            'password' => Hash::make('users12345'),
        ])->assignRole('developer');
        User::create([
            'name' => 'users 2',
            'email' => 'users2@gmail.com',
            'password' => Hash::make('users12345'),
        ])->assignRole('developer');
        User::create([
            'name' => 'users 3',
            'email' => 'users3@gmail.com',
            'password' => Hash::make('users12345'),
        ])->assignRole('developer');
        User::create([
            'name' => 'users 4',
            'email' => 'users4@gmail.com',
            'password' => Hash::make('users12345'),
        ])->assignRole('developer');
    }
}
