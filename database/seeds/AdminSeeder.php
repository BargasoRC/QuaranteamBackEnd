<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $team = array("Education", "IT Training", "Finance", "ERO");
        $position = array("Educator", "Manager", "Manager", "External Officer");

        for($i=73;$i<=76;$i++){
            DB::table('Accounts')->insert([
                'NameID' => $i,
                'Position' => $position[$i-73],
                'Team' => $team[$i-73],
                'Email' => $faker->unique()->safeEmail,
                'Batch' => null,
                'Password' => 'P@$$w0rD',
                'Gender' => 1,
            ]);
        }
    }
}
