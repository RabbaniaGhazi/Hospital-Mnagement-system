<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    
    public function run(): void
    {
        User::create([
            'name' => 'hospital',
            'email' => 'hospital@mail.com', 
            'password' => bcrypt('hospital123'),
            'role' => 'doctor', 
            'first_login' => true,
        ]);
    }
    }
