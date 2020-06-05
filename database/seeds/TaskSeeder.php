<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = array(
            array("Kitchen", 12, "C2", "HARD"),
            array("Dishwashing", 12, "C2", "HARD"),
            array("Dining", 12, "C2", "HARD"),
            array("Front Garden", 5, "C2", "LIGHT"),
            array("Courtyard", 5, "C2", "LIGHT"),
            array("Back Garden", 6, "C2", "LIGHT"),
            array("Hallway and Corridor", 6, "C2", "LIGHT"),
            array("Office", 7, "C2", "LIGHT"),
            array("Block", 7, "C2", "HARD"),
        );

        $length = count($tasks);
        for($i=0;$i<$length;$i++){
            DB::table('Tasks')->insert([
                'id' => $i+1,
                'sTasks' => $tasks[$i][0],
                'NoOfStudents' => $tasks[$i][1],
                'Center' => $tasks[$i][2],
                'Difficulty' => $tasks[$i][3],
            ]);
        }
    }
}
