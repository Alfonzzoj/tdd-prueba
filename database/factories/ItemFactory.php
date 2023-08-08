<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = \Faker\Factory::create('es_ES');
        return [
            'tipo_etiqueta' => $faker->randomElement(['Tejida', 'Estampada', 'Transfer', 'Impresa', 'Impreso']),
            'tipo_cliente' => $faker->word,
            'clave' => $faker->word,
            'nombre_etiqueta' => $faker->word,
            'ancho' => $faker->numberBetween(1, 100),
            'alto' => $faker->numberBetween(1, 100),
            'image_path' => $faker->imageUrl(),
            'tallas' => $faker->boolean,
            'estado' => $faker->randomElement(['activo', 'inactivo', 'descontinuado']),
        ];
    }
}
