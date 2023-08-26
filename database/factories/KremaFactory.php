<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Proizvodjac;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Krema>
 */
class KremaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipoviKrema = ['krema za lice', 'krema za akne', 'krema protiv starenja', 'krema za bore', 'antirid krema'];
        return [
            'user_id'=>User::factory(),
            'proizvodjac_id'=>Proizvodjac::factory(),
            'naziv'=>$this->faker->unique()->word . ' ' . $this->faker->unique()->word,
            'cena'=>$this->faker->numerify(),
            'link'=>$this->faker->imageUrl(250, 250, 'cream', true, 'Faker'),
            'tipKreme'=>$this->faker->randomElement($tipoviKrema),
        ];
    }
}
