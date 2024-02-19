<?php

namespace App\Modules\Tag\Contracts;

use Illuminate\Database\Eloquent\Relations\MorphToMany;

interface HasTags
{
    public function tags(): MorphToMany;
}
