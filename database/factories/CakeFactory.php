<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CakeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'article' => $this->faker->unique()->numberBetween(0, 100),
            'name' => $this->faker->name(),
            'text' => $this->faker->text(150),
            'price' => 100 * (mt_rand(1500, 7000)/100), /* округлил до 100 в верхнюю сторону */ 
            'category' => '{"categories": '.json_encode($this->faker->words()).'}',
        ];
    } 
}
