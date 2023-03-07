<?php

namespace App\Traits;

trait EnumToArray
{
    /**
     * @return array<string>
     */
    public static function toArray(): array
    {
        return array_map(fn (self $self) => $self->name, self::cases());
    }
}
