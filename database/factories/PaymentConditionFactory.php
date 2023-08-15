<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentCondition>
 */
class PaymentConditionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $conditions = [
            'Pago al contado',
            'Pago a plazos',
            'Pago por transferencia',
            'Pago con tarjeta de crédito',
            'Pago contra entrega',
        ];
        $randomCondition = $this->faker->unique()->randomElement($conditions);

        return [
            'nombre' => $randomCondition,
        ];
    }
}
