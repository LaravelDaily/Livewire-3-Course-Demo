<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        $categories = collect(Category::pluck('id'));

        return [
            'category_id' => $categories->random(),
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(50),
            'color'       => $this->faker->randomElement(['red', 'green', 'blue']),
            'in_stock'    => $this->faker->boolean(),
        ];
    }
}
