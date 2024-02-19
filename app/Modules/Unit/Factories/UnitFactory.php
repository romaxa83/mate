<?php

namespace App\Modules\Unit\Factories;

use Database\Factories\BaseFactory;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Tag\Models\Tag>
 */
class UnitFactory extends BaseFactory
{
    protected $model = Unit::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => fake()->city(),
        ];
    }
}
