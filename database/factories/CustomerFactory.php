<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{

    public function definition()
    {
        return [
            'user_id' => UserFactory::new()->create()->id,
            'name' => $this->faker->name(),
            'active' => random_int(0, 1),
        ];
    }
}
