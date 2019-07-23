<?php

namespace App\Models\Topo;

use Illuminate\Database\Eloquent\Model;
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
 */
class Route extends Model implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected $fillable = ['name', 'description', 'type_id'];

    public function grades()
    {
        return $this->belongsToMany(Grade::class)
            ->withTimestamps();
    }

    public function type()
    {
        return [
            'id' => 1,
            'name' => 'Alpine'
        ];
    }
}
