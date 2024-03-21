<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TacGiaTableSeeder extends Seeder
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
        for ($i = 0; $i <= 100; $i++) {
            DB::table('tacgia')->insert(
                [
                    'ten_tgia' => $faker->name,
                    'hinh_tgia' => $faker->imageUrl(640, 480)
                ]


            );
        }
    }
}
