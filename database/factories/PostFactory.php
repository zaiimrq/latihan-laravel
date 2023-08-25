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
        return [
            "user_id" => mt_rand(1, 4),
            "category_id" => mt_rand(1, 3),
            "title" => fake()->sentence(),
            "slug" => fake()->slug(),
            "excerpt" => fake()->paragraph(mt_rand(3, 6)),
            "body" => collect(fake()->paragraphs(mt_rand(5, 10))) 
                    ->map(fn($p) => "<p>$p</p>")->implode('')
        ];
    }
}
