<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'pseudo' => $this->faker->name(),
            'numero' => $this->faker->phoneNumber(),
            'genre' => 'm|f',
            'photo' => '',
            'vote_number' => $this->faker->numberBetween(1, 20),
            'motivation' => $this->faker->sentences(4, true),
            'promotion' => 'l_'.$this->faker->numberBetween(1,4),
            'slogan' => $this->faker->sentences(4, true),
            'email' => $this->faker->email()
        ];
    }
}
