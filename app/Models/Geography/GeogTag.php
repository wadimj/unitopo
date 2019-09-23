<?php

namespace App\Models\Geography;

use Illuminate\Database\Eloquent\Model;

class GeogTag extends Model
{
    protected $fillable = ['k', 'v'];

    /**
     * Get model with associated GeogTag
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function geogTag(){
        return $this->morphTo();
    }
}
