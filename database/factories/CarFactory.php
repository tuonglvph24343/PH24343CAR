<?php

namespace Database\Factories;

use App\Models\Car;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         $acvite = collect([
            Car::ACTIVE,
            Car::INACTIVE,
         ])->random(1)[0];
        return [
            'name' => fake()->text(10),
            'brand'=> fake()->text(10),
            'img'=> fake()->imageUrl,
            'is_active'=> $acvite,
            'describe'=> fake()->text(30),
        ];
    }
}
