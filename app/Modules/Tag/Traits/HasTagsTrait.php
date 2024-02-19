<?php

namespace App\Modules\Tag\Traits;

use App\Modules\Tag\Collections\TagCollection;
use App\Modules\Tag\Models\Tag;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * @see static::tags()
 * @property Tag[]|TagCollection tags
 */
trait HasTagsTrait
{
    public function tags(): MorphToMany
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
