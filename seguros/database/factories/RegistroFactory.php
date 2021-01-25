<?php

namespace Database\Factories;

use App\Models\registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local_do_acidente' => $this->faker->word,
            'data_do_acidente' => $this->faker->word,
            'valor_do_prejuizo' => $this->faker->word,
        ];
    }
}
