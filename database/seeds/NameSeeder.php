<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class NameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1;$i<=76;$i++){
            DB::table('Names')->insert([
            'FirstName' => $faker->userName,
            'MiddleName' => $faker->userName,
            'LastName' => $faker->userName,
            'Suffix' => $faker->userName,
            ]);
        }
        
    }
}
