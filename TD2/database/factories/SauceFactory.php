<?php

namespace Database\Factories;

use App\Models\Sauce;
use Illuminate\Database\Eloquent\Factories\Factory;

class SauceFactory extends Factory
{
    /**
     * Le nom du modèle associé à la фабрика (fabrika, factory).
     *
     * @var string
     */
    protected $model = Sauce::class;

    /**
     * Définir l'état par défaut du modèle.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'userId' => $this->faker->uuid,
            'name' => $this->faker->word,
            'manufacturer' => $this->faker->company,
            'description' => $this->faker->sentence,
            'mainPepper' => $this->faker->word,
            'imageUrl' => $this->faker->imageUrl(),
            'heat' => $this->faker->numberBetween(1, 10),
            'likes' => 0,
            'dislikes' => 0,
            'usersLiked' => json_encode([]),
            'usersDisliked' => json_encode([])
        ];
    }
}
