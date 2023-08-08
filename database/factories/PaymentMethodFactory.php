<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMethod>
 */
use App\Models\PaymentMethod;

class PaymentMethodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = PaymentMethod::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->randomElement(['Credito', 'Efectivo', 'Cheque'])
        ];
    }
}
