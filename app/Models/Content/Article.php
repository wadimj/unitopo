<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Article
 * @package App\Models\Content
 *
 * Model represents Text/Content section assignable to any entity
 */
class Article extends Model
{
    public const TYPE_DEFAULT = 'default';

    protected $fillable = ['title', 'content', 'order', 'type', 'section'];

    /**
     * Get model with associated Article
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function section(){
        return $this->morphTo();
    }
}
