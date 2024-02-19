<?php

namespace App\Modules\Unit\Services;

use App\Modules\Unit\Dto\UnitDto;
use App\Modules\Unit\Models\Unit;

final readonly class UnitService
{
    public function create(UnitDto $dto): Unit
    {
        $model = $this->fill(new Unit(), $dto);

        $model->save();

        return $model;
    }

    public function update(Unit $model, UnitDto $dto): Unit
    {
        $model = $this->fill($model, $dto);

        $model->save();

        return $model;
    }

    protected function fill(Unit $model, UnitDto $dto): Unit
    {
        $model->name = $dto->name;

        return $model;
    }
}
