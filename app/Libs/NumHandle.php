<?php

namespace App\Libs;

class NumHandle
{

    /**
     * only_int_num function
     *
     * @param array $array
     * @return array of INTs
     */
    public static function only_int_num(array $array)
    {
        array_walk_recursive($array, function (&$value, $key) {
            $value = filter_var($value, FILTER_SANITIZE_NUMBER_INT);
        });

        return array_filter($array, 'strlen');
    }
}
