<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            $title = $faker->words(2, true); // عنوان مكون من كلمتين عشوائيتين
            $content = $faker->sentence(40); // نص مكون من 40 كلمة
            $prv = $faker->randomElement([1, 2]); // قيمة عشوائية تكون إما 1 أو 2

            DB::table('notes')->insert([
                'title' => $title,
                'content' => $content,
                'userid' => 'mhossam5566@gmail.com',
                'prv' => $prv,
            ]);
        }
    }
}