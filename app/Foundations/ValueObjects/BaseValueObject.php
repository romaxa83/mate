<?php

namespace App\Foundations\ValueObjects;

use TypeError;

abstract class BaseValueObject
{
    protected string $value;

    public function __construct(string $value)
    {
        $value = $this->filter($value);

        $this->validate($value);

        $this->value = $value;
    }

    protected function filter(string $value): string
    {
        return $value;
    }

    abstract protected function validate(string $value): void;

    public function __toString(): string
    {
        return $this->value;
    }

    public function compare($object): bool
    {
        if (!$object instanceof static) {
            throw new TypeError(
                    __('exceptions.value_object.object_must_be_instance_class', ['class' => static::class])
            );
        }

        return $this->value === $object->value;
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function asString(): string
    {
        return $this->value;
    }
}
