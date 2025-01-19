<?php

namespace Database\Seeders;

use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Menu::factory(10)->create();
        Restaurant::factory(5)->create();

        User::factory()->create([
            'name' => 'Hsoj',
            'email' => 'hsoj@gmail.com',
            'password'=> 'abcdefghijk',
            'Telp'=> '0812345678',
            'gender'=> 'Male',
        ]);

        User::factory()->create([
            'name' => 'drew',
            'email' => 'drew@gmail.com',
            'password'=> 'abcdefghijk',
            'Telp'=> '0812345678',
            'gender'=> 'Male',
        ]);
    }
}
