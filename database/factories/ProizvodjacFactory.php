<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Industrija;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proizvodjac>
 */
class ProizvodjacFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'imeProizvodjaca'=>$this->faker->company(),
            'opis'=>$this->faker->text(90),
            'industrija_id'=>Industrija::factory(),
        ];
    }
}
