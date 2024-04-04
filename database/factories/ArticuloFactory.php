<?php

namespace Database\Factories;

use App\Models\Articulo;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticuloFactory extends Factory
{
    protected $model = Articulo::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tema' => $this->faker->text(140),
            'contenido' => $this->faker->text(1200)
        ];
    }
}
