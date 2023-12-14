<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('clients')->insert([
                'name' => $faker->name,
                'telephone' => $faker->phoneNumber,
                'address' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
