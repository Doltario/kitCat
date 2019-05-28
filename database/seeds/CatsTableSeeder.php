<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        DB::table('cats')->insert([
            'cat_name' => $faker->name
        ]);
    }
}
