<?php

namespace App\Modules\Tag\Collections;

use App\Modules\Tag\Models\Tag;
use ArrayIterator;
use Illuminate\Database\Eloquent\Collection;

/**
 * @method Tag|null first(callable $callback = null, $default = null)
 * @method Tag|null last(callable $callback = null, $default = null)
 * @method Tag|null pop()
 * @method Tag|null shift()
 * @method ArrayIterator|Tag[] getIterator()
 */
class TagCollection extends Collection
{
    public function getNamesAsString(): string
    {
        $names = [];

        foreach ($this->items as $tag) {
            $names[] = $tag->name;
        }

        return implode(', ', $names);
    }
}
