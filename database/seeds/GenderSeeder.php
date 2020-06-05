<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gNames = array("Male","Female");
        for($i=0;$i<2;$i++){
            DB::table('Gender')->insert([
                'id' => $i+1,
                'GenderName' => $gNames[$i],
            ]);
        }
    }
}
