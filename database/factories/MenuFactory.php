<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'users_id'=> 1,
            'menu_name' => $this->faker->sentence(mt_rand(2,4)),
            'menu_description' => $this->faker->sentence(mt_rand(4,8)),
            'menu_category' => "Coffee",
        ];
    }
}
