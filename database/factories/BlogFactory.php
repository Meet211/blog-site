<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->paragraphs(3, true),
            'read_time' => $this->faker->numberBetween(2, 10),
            'category_id' => $this->faker->numberBetween(1, 4),
            'image' => $this->faker->imageUrl(640, 480, 'blog', true)
        ];
    }
}