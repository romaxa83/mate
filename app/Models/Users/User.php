<?php

namespace App\Models\Users;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Foundations\Casts\Contact\EmailCast;
use App\Foundations\Models\BaseAuthenticatableModel;
use App\Foundations\ValueObjects\Email;
use Carbon\Carbon;
use Database\Factories\Users\UserFactory;

/**
 * @property int id
 * @property string name
 * @property Email email
 * @property string password
 * @property string remember_token
 * @property Carbon created_at
 * @property Carbon updated_at
 *
 * @method static UserFactory factory(...$parameters)
 */

class User extends BaseAuthenticatableModel
{
    /** @var array<int, string> */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /** @var array<int, string> */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** @var array<string, string> */
    protected $casts = [
        'email' => EmailCast::class,
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
