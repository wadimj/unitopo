<?php

use Illuminate\Database\Seeder;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rootRegion = new \App\Models\Topo\Region(['name' => 'ROOT']);
        $rootRegion->saveAsRoot();

        factory(App\Models\Topo\Region::class, 20)->create()->each(function ($region) use ($rootRegion) {
            $randomRegion =  \App\Models\Topo\Region::orderByRaw('RAND()')
                ->where('id', '<>', $region->id)
                ->first();

            if(random_int(0,1)){
                $rootRegion->appendNode($region);
            }else{
                $randomRegion->appendNode($region);
            }
        });
    }
}
