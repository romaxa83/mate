<?php

namespace App\Modules\Tag\Factories;

use App\Modules\Tag\Enums\TagType;
use App\Modules\Tag\Models\Tag;
use Database\Factories\BaseFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Modules\Tag\Models\Tag>
 */
class TagFactory extends BaseFactory
{
    protected $model = Tag::class;

    /** @return array<string, mixed> */
    public function definition(): array
    {
        return [
            'name' => fake()->city() .'-'. fake()->postcode,
            'color' =>  '#ffff',
            'type' => TagType::Budget->value,
            'user_id' => null,
        ];
    }
}
