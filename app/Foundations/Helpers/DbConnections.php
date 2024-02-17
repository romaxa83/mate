<?php

namespace App\Foundations\Helpers;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Support\Facades\DB;

/**
 * @property-read ConnectionInterface default()
 */

class DbConnections
{
    public const DEFAULT = 'pgsql';

    public static function default(): ConnectionInterface
    {
        return static::getConnection(self::DEFAULT);
    }

    public static function getConnection(string $connection): ConnectionInterface
    {
        return DB::connection($connection);
    }
}
