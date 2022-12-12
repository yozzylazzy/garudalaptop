<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class AdminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'notelp' => $this->faker->phoneNumber(),
            'kodegender' => $this->faker->randomElement(['W', 'P']),
            'jabatan' => $this->faker->randomElement(['Staff', 'Manager', 'Direktur']),
            'alamat' => $this->faker->address(),
        ];
    }
}
