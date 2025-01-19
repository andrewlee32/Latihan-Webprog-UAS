<?php

namespace Database\Factories;

use Faker\Provider\ar_EG\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Restaurant>
 */
class RestaurantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' =>fake()->name(),
            'email' => fake()->email(),
            'Telp' => '0812345678',
            'alamat' =>fake()->address(),
        ];
    }
}
