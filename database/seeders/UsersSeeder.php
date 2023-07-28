<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Jorge C. Quintero',
            'email' => 'juanc.quinteroh@autonoma.edu.co',
            'password' => 'hola123',
            ]);
        
        User::create([
            'name' => 'Pepe Pimenton',
            'email' => 'pepe@pimenton.net',
            'password' => 'holis',
        ]);
    }
}
