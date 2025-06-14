<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition(): array
    {
        return [
            'id'=>Str::uuid()->toString(),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph(3,true),
            'auther' => $this->faker->name,
            'published' => $this->faker->boolean,
        ];
    }
}
