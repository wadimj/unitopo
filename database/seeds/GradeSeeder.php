<?php

use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Topo\Grade::class, 10)->create(['scale_id' => 1]);
        factory(App\Models\Topo\Grade::class, 8)->create(['scale_id' => 2]);
    }
}
