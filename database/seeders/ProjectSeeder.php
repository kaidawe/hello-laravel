<?php

namespace Database\Seeders;
use App\Models\Project;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{ 

    protected function fakeHTMLParagraphs($count = 3) {
        $bodyArray = fake()->paragraphs($count);
        $body = '<p>' . join('</p></p>', $bodyArray ) . '</p>';
        return $body;
    }

    public function run()
    {
        Project::create([
            'title' => 'Portfolio Showcase',
            'slug' => 'default-slug',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(4),
            'category_id' => 3
        ]);
        Project::create([
            'title' => 'SSD Yearbook',
            'slug' => 'default-slug1',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 1
        ]);
        Project::create([
            'title' => 'Movie Mania',
            'slug' => 'default-slug2',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(5)
        ]);
        Project::create([
            'title' => 'News Site Homepage',
            'slug' => 'default-slug3',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 2
        ]);
        Project::create([
            'title' => 'JavaScript Game',
            'slug' => 'default-slug5',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(),
            'category_id' => 2
        ]);
        Project::create([
            'title' => 'iOS App',
            'slug' => 'default-slug6',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs()
        ]);
        Project::create([
            'title' => 'Android App',
            'slug' => 'androidapp',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs()
        ]);
        Project::create([
            'title' => 'Industry Project',
            'slug' => 'industryproject',
            'excerpt' => fake()->sentences(2, true),
            'body' => $this->fakeHTMLParagraphs(6),
            'category_id' => 3
        ]);
    }
}
