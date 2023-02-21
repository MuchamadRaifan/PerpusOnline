<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'title'=>fake()->sentence(mt_rand(2,8)),
            'sinopsis' => $this-> faker->paragraph(),
            'isbn'=> $this->faker->isbn10(),
            // 'image'=> $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
            'slug' => $this->faker->slug(),
            'author'=> $this->faker->name(),
            'user_id' => mt_rand(1,3),
            'genre_id' => mt_rand(1,3)
        ];
    }
}
