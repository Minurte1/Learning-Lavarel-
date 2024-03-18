<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use Faker\Generator; // Thêm dòng này để nhập lớp Faker\Generator
use App\Models\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Factory::create(); // Thay 'Faker' bằng 'Factory'
        for ($i = 0; $i <= 50; $i++) {
            Post::create([
                'title' => $faker->sentence(6, true),
                'body' => $faker->paragraphs(3, true)
            ]);
        }
    }
}
