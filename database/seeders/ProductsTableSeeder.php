<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('vi_VN');
        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'name' => $faker->sentence(6), // Generate sentence with 6 words for title
                'description' => $faker->word,
                'price' => rand(1000, 20000), // Random author ID between 1 and 10 (assuming authors exist)

            ]);
        }
    }
}
