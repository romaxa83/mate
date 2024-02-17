<?php

namespace App\Foundations\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

/**
 * @mixin Model
 */
abstract class BaseAuthenticatableModel extends User
{
    use HasApiTokens, HasFactory, Notifiable;

    public const MIN_LENGTH_PASSWORD = 8;
}
