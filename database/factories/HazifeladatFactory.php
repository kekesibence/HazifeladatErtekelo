<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HazifeladatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'grade' => $this->faker->numberBetween(1,5),
            'comment' => $this->faker->word(),
            'url' => $this->faker->url()
        ];
    }
}
