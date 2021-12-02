<?php

namespace App\Libs;

class SimpleValidate {

    public static function startsWithNumber(string $str)
    {
        return preg_match('/^\d/', $str) === 1;
    }

    public static function is_a_var_valid_name(string $name_to_check, bool $show_exception_if_error = null, string $suggestion = null)
    {
        $validate = empty($name_to_check) || substr_count($name_to_check, ' ') || self::startsWithNumber($name_to_check);
        $validate = $validate == false;

        if($validate)
            return $validate;
        else{
            if($show_exception_if_error)
                self::showException($name_to_check, $suggestion);
            else
                return $validate;
        }
    }

    public static function showException($param_name, string $suggestion = null)
    {
        throw new \Exception("'". $param_name ."' is invalid. ".$suggestion, 1);
    }
}