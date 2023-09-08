<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\perumahanModel>
 */
class perumahanModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'luas_perumahan' => $this->faker->numberBetween(),
            'harga_perumahan' => $this->faker->numberBetween()
        ];
    }
}

