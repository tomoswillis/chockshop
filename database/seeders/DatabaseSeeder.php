<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Category;
use \App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Category::factory()->count(5)->create();
        Product::factory()->count(5)->create();

        $categories = Category::all();
        Product::all()->each(function ($product) use ($categories){
            $product->categories()->attach(
                $categories->random(1)->pluck('id')->toArray()
            );
        });

    }
}
