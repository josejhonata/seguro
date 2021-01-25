<?php

namespace Database\Factories;

use App\Models\atendente;
use Illuminate\Database\Eloquent\Factories\Factory;

class AtendenteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = atendente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'matricula' => $this->faker->word,
            'senha' => $this->faker->word,
            'nome'=> $this->faker->word,
        ];
    }
}
