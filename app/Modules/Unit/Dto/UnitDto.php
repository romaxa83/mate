<?php

namespace App\Modules\Unit\Dto;

class UnitDto
{
    public string $name;


    public static function byArgs(array $data): self
    {
        $self = new self();

        $self->name = $data['name'];

        return $self;
    }
}
