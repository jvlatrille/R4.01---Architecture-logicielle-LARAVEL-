<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prenom' => $this->faker->name(),
            'nom' => $this->faker->name(),
            'age' => $this->faker->numberBetween($min = 18, $max = 100),
            'adresse' => $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'carteBancaire' => $this->faker->creditCardNumber()
        ];
    }
}