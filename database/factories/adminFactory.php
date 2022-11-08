<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class adminFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(){

        // Remember password is same as username, Testing Only
        return [
            'username' => 'elkasmi',
            'password' => Hash::make('elkasmi'),
        ];
    }
}
