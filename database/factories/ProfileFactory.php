<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status' => $this->faker->words(3, true),
            'bio' => $this->faker->paragraph(),
            'fb' => $this->faker->url(),
            'tw' => $this->faker->url(),
            'li' => $this->faker->url(),
            'user_id' => $this->faker->unique()->numberBetween(1, 20)
        ];
    }
}
