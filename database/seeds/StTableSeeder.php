<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Model;

class StTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $userid    = DB::table('users')
            ->select('id')
            ->get();

        $idflaw = DB::table('flawcategories')
            ->select('id')
            ->count();

        $idclient = DB::table('clients')
            ->select('id')
            ->count();

            foreach($userid as $t) {

            $id = \DB::table('st')->insertGetId(array(
                'var_mobile' => $faker->numberBetween(100000,500000),
                'var_telephone' => $faker->numberBetween(100000,500000),
                'var_email' => $faker->unique()->email,
                'var_address' => $faker->address,
                'var_invoiceci' => $faker->numberBetween(100000,500000),
                'var_located' => $faker->city,
                'var_typequipment' => $faker->word,
                'var_model' => $faker->word,
                'var_brand' => $faker->word,
                'var_serial' => $faker->numberBetween(100000,500000),
                'var_accessory' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'var_user' => $faker->firstName,
                'var_key' => $faker->numberBetween($min = 1000, $max = 9000),
                'var_workshopaddr' => $faker->address,
                'date_start' => $faker->dateTime($max = 'now'),
                'date_end' => $faker->dateTime($max = 'now', $interval = '+ 5 days'),
                'var_status' => $faker->randomElement($array = array ('Abierto','Cerrado','Esperando Repuesto')),
                'var_code' => $faker->numberBetween($min = 1000, $max = 9000),
                'var_flaw' => $faker->paragraph(rand(2,5)),
                'int_advance' => $faker->numberBetween($min = 1000, $max = 9000),
                'int_replace' => $faker->numberBetween($min = 1000, $max = 9000),
                'int_handwork' => $faker->numberBetween($min = 1000, $max = 9000),
                'int_flawcategoryid' => rand(1,$idflaw),
                'int_clientid' => rand(1,$idclient),
                'int_userid' => $t->id
            ));

                for($i=0; $i<2; $i++) {
                    \DB::table('stnotes')->insertGetId(array(
                        'int_stid' => $id,
                        'var_description'   => $faker->paragraph(rand(2,5)),
                    ));
                }
        }
    }
}
