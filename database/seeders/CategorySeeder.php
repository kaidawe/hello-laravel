<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Back End',
            'slug' => 'back-end',
        ]);
        Category::create([
            'name' => 'Front End',
            'slug' => 'front-end',
        ]);
        Category::create([
            'name' => 'Full Stack',
            'slug' => 'full-stack',
        ]);
    }
}
