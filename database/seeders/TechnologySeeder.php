<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP', 'MYSQL', 'VITE', 'VUE-JS', 'BOOTSTRAP', 'LARAVEL'];

        foreach($technologies as $technology){
            $newTechnology = new Technology();
            $newTechnology->title = $technology;
            $newTechnology->save();
        }
    }
}
