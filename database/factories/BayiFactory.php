<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bayi>
 */
class BayiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $no = $this->faker->randomNumber(4) + 348100000;
        return [
            'no_urut' => $no,
            'nama' => fake()->name(),
            'alamat' =>fake()->city(),
            'tanggal_lahir' =>fake()->date(),
            'bb_lahir' => fake()->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 9),
            'tb_lahir' => fake()->randomNumber(2),
        ];
    }
}
