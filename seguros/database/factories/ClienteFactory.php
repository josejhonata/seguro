<?php

namespace Database\Factories;

use App\Models\cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word,
            'cpf' => $this->faker->word,
            'senha' => $this->faker->word,
            'numero_da_carteira' => $this->faker->word,
            'endereço' => $this->faker->word,
        ];
    }
}
