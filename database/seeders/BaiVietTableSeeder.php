<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BaiVietTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create('vi_VN'); // Create Faker instance with Vietnamese locale

        // Generate 50 fake bai viet
        for ($i = 0; $i < 50; $i++) {
            DB::table('baiviet')->insert([
                'tieude' => $faker->sentence(6), // Generate sentence with 6 words for title
                'ten_bhat' => $faker->word,
                'tomtat' => $faker->paragraph(2), // Generate 2-paragraph summary
                'noidung' => $faker->text(1000), // Generate 1000-character content (optional)
                'ngayviet' => $faker->dateTimeThisYear, // Random date within current year
                'hinhanh' => $faker->imageUrl(640, 480), // Generate random image URL
                'ma_tgia' => rand(1, 10), // Random author ID between 1 and 10 (assuming authors exist)
                'ma_tloai' => rand(1, 10), // Random category ID between 1 and 10 (assuming categories exist)
            ]);
        }
    }
}
