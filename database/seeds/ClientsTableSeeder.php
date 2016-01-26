<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<10; $i++) {

            $id = \DB::table('clients')->insertGetId(array(
                'var_name' => $faker->firstName,
                'var_telephone' => $faker->numberBetween(100000,500000),
                'var_email' => $faker->unique()->email,
                'var_address' => $faker->address,
                'var_mobile' => $faker->numberBetween(100000,500000),
                'int_clientforce' => $faker->numberBetween($min = 0, $max = 1),
                'int_nosurvey' => $faker->numberBetween($min = 0, $max = 1),
                'int_noffert' => $faker->numberBetween($min = 0, $max = 1)
            ));
        }
    }
}
