<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            GenderSeeder::class,
            TaskSeeder::class,
            NameSeeder::class,
            AccountSeeder::class,
            AdminSeeder::class,
        ]);
    }
}
