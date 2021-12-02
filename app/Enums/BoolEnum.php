<?php

namespace App\Enums;

use App\Libs\Core\Enums\Enum;

class BoolEnum extends Enum
{
    const FALSE     = false;
    const TRUE      = true;

    protected static array $enums = [
        self::FALSE     => 'false',
        self::TRUE      => 'true',
    ];
}
