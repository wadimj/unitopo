<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Topo\Grade
 *
 * @property int $id
 * @property int $scale_id
 * @property int $position
 * @property string $value
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Topo\Route[] $routes
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade wherePosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereScaleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereValue($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Grade onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Grade whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Grade withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Grade withoutTrashed()
 */
class Grade extends Model
{
    use SoftDeletes;

    public $timestamps = false;

    public function routes()
    {
        return $this->belongsToMany(Route::class);
    }
}
