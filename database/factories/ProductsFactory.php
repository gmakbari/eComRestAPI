<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name" =>$this->faker->word,
            "price" =>$this->faker->numberBetween(100,1000),
            "stock" =>$this->faker->numberBetween(10,100),
            "discount" =>$this->faker->numberBetween(5,10),
            "description" =>$this->faker->paragraph,
            "created_at" =>$this->faker->dateTime,
        ];
    }
}
