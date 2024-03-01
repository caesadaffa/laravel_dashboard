<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class StudentsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nis' => fake()->unique()->randomNumber(5),
            'nama' => fake()->name(),
            'tanggal_lahir' => fake()->date(),
            'kelas_id' => fake()->numberBetween(1, 6),
            'alamat' => fake()->address()
        ];
    }
}
