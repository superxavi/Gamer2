<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EquipoFactory extends Factory
{
    protected $model = Equipo::class;

    public function definition()
    {
        return [
			'nombre_equipo' => $this->faker->name,
			'observacion' => $this->faker->name,
        ];
    }
}
