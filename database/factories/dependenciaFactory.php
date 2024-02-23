<?php

namespace Database\Factories;

use App\Models\Admin\Dependencia as AdminDependencia;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dependencia>
 */
class DependenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AdminDependencia::class;
    
    public function definition()
    {
        return [
            'provincia' => $this->faker->sentence(),
            'parroquia' => $this->faker->sentence(),
            'num_distrito' => $this->faker->sentence(),
            'cod_distrito' => $this->faker->sentence(),
            'distrito' => $this->faker->sentence(),
            'num_circuito' => $this->faker->sentence(),
            'cod_circuito' => $this->faker->sentence(),
            'circuito' => $this->faker->sentence(),
            'num_subcircuito' => $this->faker->sentence(),
            'cod_subcircuito' => $this->faker->sentence(),
            'subcircuito' => $this->faker->sentence()
        ];
    }
}
