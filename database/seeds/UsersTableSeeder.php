<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=0; $i<30; $i++) {

            $id = \DB::table('users')->insertGetId(array(
                'var_username' => $faker->firstName,
                'var_userlastname' => $faker->lastName,
                'var_email' => $faker->unique()->email,
                'var_password' => \Hash::make('123456'),
                'type' => 'Usuario'
            ));

            \DB::table('notes')->insert(array(
                'int_userid'            => $id,
                'var_title'               => $faker->word,
                'var_description'   => $faker->paragraph(rand(2,5)),
                'var_category'         => $faker->word,
                'var_status'  => $faker->randomElement($array = array ('Activos','Archivados')),
                'date_note'   => $faker->date($format = 'Y-m-d', $max = 'now'),
            ));
        }
    }
}
