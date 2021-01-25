<?php

namespace Database\Factories;

use App\Models\carro;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = carro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'placa' => $this->faker->word,
            'cor' => $this->faker->word,
            'modelo' => $this->faker->word,
            'ano' => $this->faker->word,
        ];
    }
}
