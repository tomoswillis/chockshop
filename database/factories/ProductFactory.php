<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
            $name = $this->faker->company;
            
            $nameArr = explode(' ', $name);
            $name = trim($nameArr[0] .' '.'Brownie');

            return [
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $this->faker->realText(120),
                'price' => $this->faker->numberBetween(1000, 5000),
            ];
    }
}
