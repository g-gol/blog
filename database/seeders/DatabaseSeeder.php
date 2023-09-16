<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(20)->create();
        Category::factory(5)->create();
        Article::factory(20)->create()->each(function($article) {
            $randomCategories = Category::all()->random(rand(1,5))->pluck('id');
            $article->categories()->attach($randomCategories);
        });

    }
}
