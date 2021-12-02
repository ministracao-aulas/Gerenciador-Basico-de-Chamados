<?php

namespace App\Libs\Formaters;

class BoolenFormater
{
    public static function strToBool(string $value, bool $default_value = false)
    {
        $values = [
            'true' => [
                'true',
                'sim',
                '1',
                'ativo',
                'active',
                'ok',
                'yes',
            ],
            'false' => [
                'false',
                'nao',
                'não',
                '0',
                'inativo',
                'inactive',
                'no',
                'null',
            ],
        ];

        if(in_array(strtolower($value), $values['true']))
            return true;

        if(in_array(strtolower($value), $values['false']))
            return false;

        return $default_value;
    }
}
