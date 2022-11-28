<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Salary>
 */
class SalaryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'employe_id' => $this->faker->randomDigit(),
            'employe_name' => $this->faker->firstName($gender = 'male'|'female'),
            'employe_skills' => $this->faker->word(),
            'employe_entity' => $this->faker->randomNumber(),
            'salary_upgrade' => $this->faker->date(),
            'salary_brut' => $this->faker->randomNumber(),
            'salary_net' => $this->faker->randomNumber(),
        ];
    }
}
