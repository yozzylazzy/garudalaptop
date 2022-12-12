<?php


namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class PenjualanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'IDTransaksi' => $this->faker->unique()->randomNumber(8),
            'NIK' => $this->faker->unique()->randomNumber(8),
            'IDAdmin' => $this->faker->unique()->randomNumber(8),
            'tglpembelian' => $this->faker->date(),
            'metodepembayaran' => $this->faker->randomElement(['Debit', 'OVO', 'GOPAY','Kredit','M-Banking','DANA','Transfer','Cash']),
        ];
    }
}
