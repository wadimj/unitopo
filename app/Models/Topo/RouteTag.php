<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;

class RouteTag extends Model
{
    protected $fillable = ['route_id', 'k', 'v'];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
