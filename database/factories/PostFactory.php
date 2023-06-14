<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // 'image_url' => ,
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'summary' => fake()->text(100),
            'content' => fake()->text(2000),
            'image_url' => fake()->imageUrl(640, 480),
            'is_published' => fake()->numberBetween(0,1),
            'topic_id' => fake()->numberBetween(1,5),
            'user_id' => fake()->numberBetween(1,3),
            'published_at' => now()
        ];
    }
}
