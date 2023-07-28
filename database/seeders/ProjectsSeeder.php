<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'Portafolio UAM',
            'description' => 'Se esta elaborando un portafolio para los proyectos de la comunidad uam',
            'finish_date' => '2023-07-28',
            'category_id' => Category::all()->random()->id,
            'owner_id' => User::all()->random()->id,
        ]);

        Project::create([
            'name' => 'Servicio de citas textuales',
            'description' => 'Se esta elaborando un servicio para poder publicar diferentes frases celebres',
            'finish_date' => '2024-01-31',
            'category_id' => Category::all()->random()->id,
            'owner_id' => User::all()->random()->id,
        ]);
    }
}
