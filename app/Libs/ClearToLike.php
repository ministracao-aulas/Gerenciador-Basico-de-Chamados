<?php

namespace App\Libs;

class ClearToLike {

    /**
     * clearStr function
     * 
     * Clear string to use in like query
     *
     * @param string $str
     * @param string $replace_by
     * @return string
     */
    public static function strToLike(string $str, string $replace_by = null)
    {
        $replace_by = $replace_by ?? '%';
        $str        = preg_replace( ['/[^a-zA-Z0-9 -]/', '/[ ]+/', '/^-|-$/'], ['', '-', ''], $str);
        $str        = str_replace([ '-','.','á','ã','à','é','ü','é' ], $replace_by, strtolower($str));
        return $str;
    }
}
