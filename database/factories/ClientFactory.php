<?php

namespace Database\Factories;

use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rfc' => $this->faker->unique()->regexify('[A-Z]{4}\d{6}'),
            'razon_social' => $this->faker->company,
            'telefono_corporativo' => $this->faker->phoneNumber,
            'enterprise_id' => $this->faker->unique()->numberBetween(1, Enterprise::count()),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
