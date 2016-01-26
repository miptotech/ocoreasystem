<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class FlawcategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<6; $i++) {

            $id = \DB::table('flawcategories')->insertGetId(array(
                'var_category' => $faker->word
            ));

        }
    }
}
