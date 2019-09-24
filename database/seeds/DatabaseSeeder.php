<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            RegionSeeder::class,
            GradeSeeder::class,
            TagSeeder::class,
            GeographySeeder::class,
            FototopoSeeder::class,
            RouteSeeder::class,
        ]);
    }
}
