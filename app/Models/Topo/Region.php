<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\NodeTrait;

/**
 * App\Models\Topo\Region
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $_lft
 * @property int $_rgt
 * @property int|null $parent_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Kalnoy\Nestedset\Collection|\App\Models\Topo\Region[] $children
 * @property-read \App\Models\Topo\Region|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region d()
 * @method static bool|null forceDelete()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Topo\Region newModelQuery()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Topo\Region newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Region onlyTrashed()
 * @method static \Kalnoy\Nestedset\QueryBuilder|\App\Models\Topo\Region query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereLft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereRgt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Region whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Region withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Topo\Region withoutTrashed()
 * @mixin \Eloquent
 */
class Region extends Model
{
    use NodeTrait;
    use SoftDeletes;

    public const TYPE_CONTINENT = 'continent';
    public const TYPE_REGION = 'region';
    public const TYPE_SUBREGION = 'subregion';
    public const TYPE_MOUNTAIN_RANGE = 'm-range';
    public const TYPE_MOUNTAIN_VALLEY = 'm-valley';
    public const TYPE_MOUNTAIN_MASIFF = 'm-masiff';
    public const TYPE_MOUNTAIN_WALL = 'm-wall';
    public const TYPE_CRAG = 'crag';
    public const TYPE_ROCK = 'rock';

    public const ALLOWED_TYPES = [
        self::TYPE_CONTINENT, self::TYPE_REGION, self::TYPE_SUBREGION,
        self::TYPE_MOUNTAIN_RANGE, self::TYPE_MOUNTAIN_VALLEY, self::TYPE_MOUNTAIN_MASIFF, self::TYPE_MOUNTAIN_WALL,
        self::TYPE_CRAG, self::TYPE_ROCK
    ];

    protected $fillable = ['name', 'description', 'type', 'union_id'];

    public function routes()
    {
        return $this->hasMany(Route::class);
    }
}
