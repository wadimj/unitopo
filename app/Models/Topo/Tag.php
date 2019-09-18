<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Topo\Tag
 *
 * @property int $id
 * @property int|null $route_id
 * @property string $k
 * @property string $v
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Topo\Route|null $route
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Topo\Tag whereV($value)
 * @mixin \Eloquent
 */
class Tag extends Model
{
    use SoftDeletes;

    protected $fillable = ['k', 'v'];
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function routes()
    {
        return $this->belongsToMany(Route::class);
    }

    /**
     * @return string
     */
    public function getTagName()
    {
        if(array_key_exists($this->k,TagKey::CONCRETE_TAGS)){
            return TagKey::CONCRETE_TAGS[$this->k];
        }

        return $this->k;
    }

    public function getTagValue()
    {
        switch ($this->k){
            case TagKey::LENGTH:
                return $this->k . ' m';
            default:
                return $this->k;
        }
    }

    public function getDuplicateCriteria()
    {
        switch ($this->k){
            case TagKey::TYPE:
                return $this->k . '-' . $this->v;
            default:
                return $this->k;
        }
    }
}
