<?php

namespace App\Libs;

class MiniTools
{
    public static function methods($instance)
    {
        $methods = get_class_methods($instance);
        asort($methods);
        return array_values($methods);
    }
}