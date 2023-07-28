<?php

namespace Database\Seeders;

use App\Models\Developmenttool;
use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DevelopmenttoolsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Developmenttool::create([
            'type' => 'Desarrollo backend',
            'name' => 'php',
            'project_id' => Project::all()->random()->id,
        ]);

        Developmenttool::create([
            'type' => 'Diseño frontend',
            'name' => 'Figma',
            'project_id' => Project::all()->random()->id,
        ]);
    }
}
