<?php

namespace App\Modules\Tag\Models;

use App\Foundations\Models\BaseModel;
use App\Modules\Tag\Enums\TagType;
use App\Modules\Tag\Factories\TagFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

/**
 * @property int id
 * @property string name
 * @property TagType type
 * @property string color
 * @property int|null user_id
 * @property Carbon|null created_at
 * @property Carbon|null updated_at
 *
 * @method static TagFactory factory(...$parameters)
 */
class Tag extends BaseModel
{
    use HasFactory;

    public const TABLE = 'tags';
    protected $table = self::TABLE;

    /** @var array<string, string> */
    protected $casts = [
        'type' => TagType::class,
    ];

    protected static function newFactory(): TagFactory
    {
        return TagFactory::new();
    }
}
