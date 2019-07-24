<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use OwenIt\Auditing\Contracts\Auditable;

/**
 * App\Models\Topo\Route
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Topo\Grade[] $grades
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\OwenIt\Auditing\Models\Audit[] $audits
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Topo\RouteTag[] $tags
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Route onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Route whereDeletedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Route withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Route withoutTrashed()
 */
class Route extends Model implements Auditable
{
    use SoftDeletes;
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name', 'description', 'type_id', 'region_id'];

    public function tags()
    {
       return $this->hasMany(RouteTag::class);
    }

    public function grades()
    {
        return $this->belongsToMany(Grade::class)
            ->withTimestamps();
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
