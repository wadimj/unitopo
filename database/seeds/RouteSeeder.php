<?php

use Illuminate\Database\Seeder;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Topo\Route::class, 60)->create()->each(function ($route) {
            $grades = [];
            $grades[] = \App\Models\Topo\Grade::orderByRaw('RAND()')->where('scale_id', '=', 1)->take(1)->get()[0];
            $grades[] = \App\Models\Topo\Grade::orderByRaw('RAND()')->where('scale_id', '=', 2)->take(1)->get()[0];

            if(random_int(0,1)){
                shuffle($grades);
                unset($grades[1]);
            }

            /** @var \App\Models\Topo\Route $route */
            $route->grades()->saveMany($grades);

            $randomRegion =  \App\Models\Topo\Region::orderByRaw('RAND()')
                ->where('id', '<>', 1)->first();
            $route->region()->associate($randomRegion)->save();

            $tags = \App\Models\Topo\Tag::orderByRaw('RAND()')->where('k', '=', \App\Models\Topo\TagKey::TYPE)->take(random_int(1,3))->get();
            $tags[] = \App\Models\Topo\Tag::orderByRaw('RAND()')->where('k', '=', \App\Models\Topo\TagKey::LENGTH)->take(1)->get()[0];
            if(random_int(0,10) > 6) {
                $tags[] = \App\Models\Topo\Tag::orderByRaw('RAND()')->where('k', '=', \App\Models\Topo\TagKey::LOOSE)->take(1)->get()[0];
            }
            if(random_int(0,10) > 6) {
                $tags[] = \App\Models\Topo\Tag::orderByRaw('RAND()')->where('k', '=', \App\Models\Topo\TagKey::TOP_PICK)->take(1)->get()[0];
            }
            $route->tags()->saveMany($tags);

            factory(App\Models\Content\Article::class, 1)->create([
                'section_type' => \App\Models\Topo\Route::class,
                'section_id' => $route->id
            ]);
        });
    }
}
