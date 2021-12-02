<?php

namespace App\Libs;

use Illuminate\Support\Arr;

class ArrayHandle
{
    /**
     * reAssocKeys function
     * 
     * Altera as chaves associativas de um array
     *
     * Uso: reAssocKeys(['a' => 'b'], ['a' => 'Algo aqui']); //retorna ['b' => 'Algo aqui']
     * 
     * @param array $key_map
     * @param array $assoc_array
     * @return array|void
     */
    public static function reAssocKeys(array $key_map, array $assoc_array, bool $trim = false)
    {
        $new_keys = [];

        if(
            (is_array($key_map) && is_array($assoc_array))
            &&
            (Arr::isAssoc($key_map) && Arr::isAssoc($assoc_array))
        )
        {
            foreach ($assoc_array as $key => $value)
            {
                if(in_array($key, array_keys($key_map)))
                {
                    if($trim)
                        $new_keys[trim($key_map[$key])] = trim($value);
                    else
                        $new_keys[$key_map[$key]] = $value;
                }
            }
        }

        return $new_keys ?? null;
    }

}