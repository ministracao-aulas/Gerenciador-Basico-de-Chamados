<?php

namespace App\Libs\Core\Enums;

interface EnumInterface
{
    public static function getValue(int $enum);
    public static function getEnum($value);

    public static function enumList(bool $only_ids = false) :array;

    public static function enumExists(int $enum) :bool;
}
