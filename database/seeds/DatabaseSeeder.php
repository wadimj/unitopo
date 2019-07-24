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
        factory(App\Models\User::class, 3)->create();
        factory(App\Models\Player::class, 5)->create();

        factory(App\Models\Topo\Grade::class, 10)->create();
        factory(App\Models\Topo\Route::class, 60)->create()->each(function ($route) {
            $grades = \App\Models\Topo\Grade::orderByRaw('RAND()')->take(random_int(1,2))->get();
            /** @var \App\Models\Topo\Route $route */
            $route->grades()->saveMany($grades);

            $types = ['sport', 'multipitch', 'alpine', 'trad', 'sport|multipitch', 'trad|multipitch'];
            shuffle($types);

            $typeTag = new \App\Models\Topo\RouteTag(['k' => 'type', 'v' => $types[0], 'route_id' => $route->id]);
            $typeTag->save();
            factory(App\Models\Topo\RouteTag::class, random_int(1,3))->create(['route_id' => $route->id]);
        });
    }
}
