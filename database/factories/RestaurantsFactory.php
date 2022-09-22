<?php

namespace Database\Factories;

use App\Models\Restaurants;
use Illuminate\Database\Eloquent\Factories\Factory;

class RestaurantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Restaurants::class;


    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'adresse' => $this->faker->adress(),
            'email' => $this->faker->unique()->safeEmail(),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ];
    }
}
