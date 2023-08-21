<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        Project::create([
            "name"=>"futuca",
            "client_id"=>1,
            "type"=>"website",
            "frontend"=>"Tailwidn CSS",
            "backend"=>"laravel",
            "start_date"=>now(),
            "end_date"=>now(),
            "description"=>"Description Project",
        ]);
    }
}
