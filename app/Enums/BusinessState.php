<?php

namespace App\Enums;

use App\Libs\Core\Enums\Enum;

class BusinessState extends Enum
{
    const INACTIVE  = 1;
    const ACTIVE    = 2;
    const SUSPENDED = 3;
    const NEW       = 4;
    const BLOCKED   = 5;

    protected static array $enums = [
        self:: INACTIVE     => 'Inactive',
        self:: ACTIVE       => 'Active',
        self:: SUSPENDED    => 'Suspended',
        self:: NEW          => 'New',
        self:: BLOCKED      => 'Blocked',
    ];
}
