<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'full_name' => $this->faker->numerify('user-####'),
            'hire_date' => $this->faker->date(),
            'cnss_info' => $this->faker->randomNumber(),
            'birth_date' => $this->faker->date(),
            'email' => $this->faker->email(),
            'phone_number' => $this->faker->randomNumber(),
            'skills' => $this->faker->randomLetter(),
            'gender' => $this->faker->randomLetter(),
            'entity' => $this->faker->randomLetter()
        ];
    }
}
