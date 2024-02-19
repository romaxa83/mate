<?php

namespace App\Modules\Tag\Enums;

enum TagType: string {
    case Budget = "budget";
    case Article = "article";

    public function label(): string
    {
        return match ($this->value){
            static::Budget->value => 'Budget',
            static::Article->value => 'Article',
            default => throw new \Exception('Unexpected match value'),
        };
    }
}
