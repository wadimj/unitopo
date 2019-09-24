<?php

use Illuminate\Database\Seeder;

class GeographySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Geography\GeogTag::class, 50)->create();

        factory(\App\Models\Geography\Place::class, 150)->create()->each(function($geography){
            $geogtags = \App\Models\Geography\GeogTag::orderByRaw('RAND()')->take(random_int(0,4))->get();
            $geography->geogTags()->saveMany($geogtags);
        });
        factory(\App\Models\Geography\Way::class, 100)->create()->each(function($geography){
            $geogtags = \App\Models\Geography\GeogTag::orderByRaw('RAND()')->take(random_int(0,4))->get();
            $geography->geogTags()->saveMany($geogtags);
        });
        factory(\App\Models\Geography\Polygon::class, 50)->create()->each(function($geography){
            $geogtags = \App\Models\Geography\GeogTag::orderByRaw('RAND()')->take(random_int(0,4))->get();
            $geography->geogTags()->saveMany($geogtags);
        });
    }
}
