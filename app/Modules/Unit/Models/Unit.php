<?php

namespace App\Modules\Unit\Models;

use App\Foundations\Models\BaseModel;
use App\Modules\Unit\Factories\UnitFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int id
 * @property string name
 *
 * @method static UnitFactory factory(...$parameters)
 */
class Unit extends BaseModel
{
    use HasFactory;

    public const TABLE = 'units';
    protected $table = self::TABLE;

    public $timestamps = false;

    protected static function newFactory(): UnitFactory
    {
        return UnitFactory::new();
    }
}
