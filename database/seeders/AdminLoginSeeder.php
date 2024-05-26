<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->where('role', 'admin')->doesntExist()) {
            User::query()->create([
                'name' => 'Rhema Admin',
                'email' => 'church@rhema.com',
                'role' => 'admin',
                'password' => bcrypt('(password)')
            ]);
        }
    }
}
