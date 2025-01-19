<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
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
            'desc' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Autem, maiores!',
            'price' => rand(10000, 30000),
            'gambar'=> '/storage/images/5800_8_01.jpg'
        ];
    }
}
