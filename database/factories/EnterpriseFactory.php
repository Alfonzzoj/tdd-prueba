<?php
namespace Database\Factories;

use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnterpriseFactory extends Factory
{
    protected $model = Enterprise::class;

    public function definition()
    {
        return [
            'empresa' => $this->faker->company,
            'razon_social' => $this->faker->company,
            'direccion' => $this->faker->address,
            'rfc' => $this->faker->regexify('[A-Z]{4}[0-9]{6}[A-Z0-9]{3}'),
            'path_logo' => $this->faker->imageUrl(200, 200),
            'path_header' => $this->faker->imageUrl(200, 200),
            'path_footer' => $this->faker->imageUrl(200, 200),
            'prefijo' => $this->faker->randomLetter,
        ];
    }
}
