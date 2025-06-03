<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeedersTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'role' => 'admin',
            'name' => 'App admin',
            'email' => 'app_admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'role' => 'event_admin',
            'name' => 'Event admin',
            'email' => 'event_admin@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Jamal',
            'email' => 'jamal@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Apu',
            'email' => 'apu@gmail.com',
            'password' => Hash::make('password')
        ]);
        User::create([
            'role' => 'user',
            'name' => 'Fahim',
            'email' => 'fahim@gmail.com',
            'password' => Hash::make('password')
        ]);
    }
}
