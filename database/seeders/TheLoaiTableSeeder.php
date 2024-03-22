<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Category;

class TheLoaiTableSeeder extends Seeder
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
        //tạo 100 dòng dữ liệu 
        for ($i  = 0; $i <= 100; $i++) {
            DB::table('theloai')->insert([
                'ten_tloai' => $faker->word,
                'hinh_tloai' => $faker->imageUrl(640, 480)
            ]);
        }
    }
}
