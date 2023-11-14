<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = new User;
        $admin->id = 1;
        $admin->name = 'vi';
        $admin->email = 'N00220460@iadt.ie';
        $admin->password = 'password123';
        $admin->save();
    }
}
