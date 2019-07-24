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
        factory(App\Models\Topo\Route::class, 30)->create()->each(function ($route) {
            $grades = \App\Models\Topo\Grade::orderByRaw('RAND()')->take(random_int(1,2))->get();
            /** @var \App\Models\Topo\Route $route */
            $route->grades()->saveMany($grades);

            factory(App\Models\Topo\RouteTag::class, random_int(1,5))->create(['route_id' => $route->id]);
        });
    }
}
