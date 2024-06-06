<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clientname'=>"name",
        'phone'=>"name",
        'email'=>"name",
        'website'=>"name",
        'city'=>"name",
        'active'=>"1",
        'img'=>"name",
        'address'=>"name",
        ];
    }
}
