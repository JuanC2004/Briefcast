<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
            'message' => 'Excelente proyecto, grandes espectativas',
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
        ]);
        
        Comment::create([
            'message' => 'Un proyecto poco util, replantear la idea',
            'user_id' => User::all()->random()->id,
            'project_id' => Project::all()->random()->id,
        ]);
    }
}
