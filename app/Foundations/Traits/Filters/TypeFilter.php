<?php

namespace App\Foundations\Traits\Filters;

trait TypeFilter
{
    public function type(array|string $value): void
    {
        if(is_array($value)){
            $this->whereIn('type', $value);
            return;
        }

        $this->where('type', $value);
    }
}
