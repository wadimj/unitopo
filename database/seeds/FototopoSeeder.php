<?php

use Illuminate\Database\Seeder;

class FototopoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Geometry\Fototopo::class, 50)->create();
    }
}
