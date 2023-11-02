<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CandidateFactory extends Factory
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
            'firstname' => $this->faker->name(),
            'pseudo' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'genre' => 'm',
            'image' => '',
            'vote_number' => $this->faker->numberBetween(1, 20),
            'motivation' => $this->faker->sentences(4, true),
            'promotion' => 'l'.$this->faker->numberBetween(1,3),
            'slogan' => $this->faker->sentences(4, true),
            'email' => $this->faker->email(),
            'count_vote' => 0
        ];
    }
}
