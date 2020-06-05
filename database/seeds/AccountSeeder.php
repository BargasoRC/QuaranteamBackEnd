<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=1;$i<=24;$i++){
            DB::table('Accounts')->insert([
                'NameID' => $i,
                'Position' => null,
                'Team' => null,
                'Email' => $faker->unique()->safeEmail,
                'Batch' => '2020B',
                'Password' => 'P@$$w0rD',
                'Gender' => 1,
            ]);
        }

        for($i=25;$i<=72;$i++){
            DB::table('Accounts')->insert([
                'NameID' => $i,
                'Position' => null,
                'Team' => null,
                'Email' => $faker->unique()->safeEmail,
                'Batch' => '2020B',
                'Password' => 'P@$$w0rD',
                'Gender' => 2,
            ]);
        }
    }
}
