<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;



class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('products')->insert([
                'name' => $faker->word,
                'slug' => $faker->slug,
                'stock' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 5), // Assurez-vous que ces catégories existent déjà
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
