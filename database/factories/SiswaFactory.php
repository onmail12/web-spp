<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'nisn' => $this->faker->unique->numerify('2020####'), //generate random $ digit
            'nis' => $this->faker->numerify('2020####'),
            'nama' => $this->faker->name(),
            'id_kelas' => mt_rand(1, 10),
            'alamat' => $this->faker->streetAddress(),
            'no_telp' => $this->faker->e164PhoneNumber(),
            'id_spp' => mt_rand(1, 10),
        ];
    }
}
