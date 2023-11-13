<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Post::truncate();
        Category::truncate();
        
        $user = User::factory(1)->create()->first();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);
        
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);
        
        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        Post::create([
            'slug' => 'my-personal-post',
            'title' => 'My Personal Post',
            'excerpt' => 'Text 1',
            'body' => '<p>My first  personal text using seed to put data on database</p>',
            'category_id' => $personal->id,
            'user_id' => $user->id,
        ]);

        Post::create([
            'slug' => 'my-work-post',
            'title' => 'My Work Post',
            'excerpt' => 'Text 2',
            'body' => '<p>My first work text using seed to put data on database</p>',
            'category_id' => $work->id,
            'user_id' => $user->id,
        ]);

        Post::create([
            'slug' => 'my-family-post',
            'title' => 'My Family Post',
            'excerpt' => 'Text 1',
            'body' => '<p>My first family text using seed to put data on database</p>',
            'category_id' => $family->id,
            'user_id' => $user->id,
        ]);
    }
}
