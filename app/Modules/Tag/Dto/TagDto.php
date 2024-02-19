<?php

namespace App\Modules\Tag\Dto;

class TagDto
{
    public string $name;
    public ?string $color;
    public string $type;


    public static function byArgs(array $data): self
    {
        $self = new self();

        $self->name = $data['name'];
        $self->type = $data['type'];
        $self->color = $data['color'] ?? null;

        return $self;
    }
}
