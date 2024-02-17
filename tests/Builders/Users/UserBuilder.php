<?php

namespace Tests\Builders\Users;

use App\Foundations\ValueObjects\Email;
use App\Models\Users\User;
use Tests\Builders\BaseBuilder;

class UserBuilder extends BaseBuilder
{
    function modelClass(): string
    {
        return User::class;
    }

    public function email(string $value): self
    {
        $this->data['email'] = new Email($value);
        return $this;
    }
}
