<?php

namespace Database\Seeders;

use App\Models\Participate;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Participate::create([
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
        ]);

        Participate::create([
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
        ]);
    }
}
