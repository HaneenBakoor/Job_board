<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(10)->create();
        Tag::factory(10)->create();
        Comment::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Create a single post
// $post = Post::factory()->create();

// Create multiple posts
// $posts = \App\Models\Post::factory()->count(10)->create();
    }
}
