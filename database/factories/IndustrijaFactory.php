<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Industrija>
 */
class IndustrijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $industrije = ['Crystal Derma', 'Alfaparf', 'All Nut', 'Aqua Fortis', 'Aura'];
        return [
            'nazivIndustrije'=>$this->faker->randomElement($industrije),
            'opis'=>$this->faker->text(150),
        ];
    }
}
