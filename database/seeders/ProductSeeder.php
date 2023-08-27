<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
//        Product::factory(50)->create();

        $categories = collect(Category::pluck('id'));
        Product::factory(50)
            ->create()
            ->each(function (Product $product) use ($categories) {
                $product->categories()->sync($categories->random(2));
            });
    }
}
