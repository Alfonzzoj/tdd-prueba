<?php

namespace Database\Factories;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AccountStatement>
 */
class AccountStatementFactory extends Factory
{
  /**
   * Define the model's default state.
   *
   * @return array<string, mixed>
   */

  // protected $model = AccountStatement::class;

  public function definition()
  {
    $clientIds = Client::pluck('id');

    return [
      'id' => $this->faker->unique()->randomNumber(),
      'client_id' => $this->faker->randomElement($clientIds),
      'pedido_id' => $this->faker->randomNumber(),
      'fecha_creacion' => Carbon::createFromFormat('d/m/Y', $this->faker->date('d/m/Y')),
      'fecha_entrega' => Carbon::createFromFormat('d/m/Y', $this->faker->date('d/m/Y')),
      'pagado' => $this->faker->randomFloat(2, 0, 10000),
      'pendiente' => $this->faker->randomFloat(2, 0, 10000),

    ];
  }
}
