<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'code' => $this->faker->randomLetter(),
            'purchase_price' => $this->faker->randomNumber(5),
            'sales_price' => $this->faker->randomNumber(5),
            'id_kategori' => $this->faker->randomElement($array = array(1,2,3,4,5,6,7,8)),
            'id_unit' => $this->faker->randomElement($array = array(1,2,3,4,5,6,7,8)),
        ];
    }
}
