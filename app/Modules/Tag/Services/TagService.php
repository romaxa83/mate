<?php

namespace App\Modules\Tag\Services;

use App\Models\Users\User;
use App\Modules\Tag\Dto\TagDto;
use App\Modules\Tag\Models\Tag;

final readonly class TagService
{
    public function create(TagDto $dto, ?User $user = null): Tag
    {
        $model = $this->fill(new Tag(), $dto);
        $model->user_id = $user?->id;

        $model->save();

        return $model;
    }

    public function update(Tag $model, TagDto $dto): Tag
    {
        $model = $this->fill($model, $dto);

        $model->save();

        return $model;
    }

    protected function fill(Tag $model, TagDto $dto): Tag
    {
        $model->name = $dto->name;
        $model->color = $dto->color;
        $model->type = $dto->type;

        return $model;
    }
}
