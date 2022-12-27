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
    public function definition()
    {
        return [
            'user_id' => 1,
            'category_id' => 2,
            'title' => $this->faker->sentence(),
            'content' => '<p>' . implode('<p>', $this->faker->paragraphs(3)) . '</p>',
            'slug' => $this->faker->slug()
        ];
    }
}
