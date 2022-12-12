<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class PembeliFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->unique()->randomNumber(8),
            'nama' => $this->faker->name(),
            'alamat' => $this->faker->address(),
            'notelp' => $this->faker->phoneNumber(),
            'kodegender' => $this->faker->randomElement(['L', 'P']),
            'pekerjaan' => $this->faker->randomElement(['PNS', 'Swasta', 'Wiraswasta','Wirausahawan','Menganggur','Pelajar','Mahasiswa','Lainnya']),
            'tgllahir' => $this->faker->date(),
        ];
    }
}
