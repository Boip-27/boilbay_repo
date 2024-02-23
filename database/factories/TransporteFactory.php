<?php

namespace Database\Factories;

use App\Models\Admin\Transporte as AdminTransporte;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TransporteFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected $model = AdminTransporte::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        return [
            'tipo'=>$this->faker->randomElement(['Camioneta','Automóvil','Motocicleta']) ,
            'marca'=>$this->faker->sentence(),
            'modelo'=>$this->faker->sentence(),
            'placa'=>$this->faker->sentence(),
            'chasis'=>$this->faker->sentence(),
            'motor'=>$this->faker->sentence(),
            'kilometraje'=>$this->faker->sentence(),
            'cilindraje'=>$this->faker->sentence(),
            'carga'=>$this->faker->sentence(),
            'pasajeros'=>$this->faker->sentence()
        ];
    }

}