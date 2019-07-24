<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Topo\RouteTag
 *
 * @property int $id
 * @property int|null $route_id
 * @property string $k
 * @property string $v
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Topo\Route|null $route
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\RouteTag whereV($value)
 * @mixin \Eloquent
 */
class RouteTag extends Model
{
    protected $fillable = ['route_id', 'k', 'v'];

    public function route()
    {
        return $this->belongsTo(Route::class);
    }
}
