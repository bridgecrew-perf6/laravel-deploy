<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // faker generate multiple products
        $faker = \Faker\Factory::create();

        DB::table("products")->insert([
            [
                "name" => "Product 1",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 2",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 3",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 4",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 5",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 6",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ],
            [
                "name" => "Product 7",
                "detail" => $faker->text,
                "price" => $faker->randomFloat(2, 1, 100),
                "quantity" => $faker->numberBetween(5, 55),
                "image" => "https://loremflickr.com/400/400/computer"
            ]
        ]);
    }
}
