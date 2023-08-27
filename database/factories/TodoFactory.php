<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title'  => $this->faker->words(asText: true),
            'body'   => $this->faker->text(),
            'due_at' => $this->faker->dateTimeBetween('now', '+1 month'),
        ];
    }
}
