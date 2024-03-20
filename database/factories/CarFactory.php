<?php

namespace Database\Factories;

use App\Models\Mf;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        {
            return [
                'description' => $this->faker->sentence,
                'model' => $this->faker->word,
                'produced_on' => now(),
                'image' => 'car' . rand(1, 3) . '.jpg',
                'mf_id' => Mf::pluck('id')->random(),
            
            ];

        }
    }
}
