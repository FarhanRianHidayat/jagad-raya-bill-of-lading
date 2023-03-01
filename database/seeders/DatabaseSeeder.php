<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);
        User::create([
            'name' => 'employee',
            'role' => 'employee',
            'email' => 'employee@gmail.com',
            'password' => bcrypt('employee')
        ]);
        User::create([
            'name' => 'user',
            'role' => 'user',
            'email' => 'user',
            'password' => bcrypt('user')
        ]);
    }
}
