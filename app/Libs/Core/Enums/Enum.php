<?php

namespace App\Libs\Core\Enums;

use Illuminate\Support\Facades\Cache;

class Enum implements EnumInterface
{
    #const ABERTO         = 1;

    protected static array $enums = [
        #static::ABERTO          => 'Aberto',
    ];

    public static function getValue(int $enum)
    {
        return static::$enums[$enum] ?? null;
    }

    public static function getEnum($value)
    {
        $value = trim($value);
        return array_flip(static::$enums)[$value] ?? null;
    }

    public static function enumList(bool $only_ids = false) :array
    {
        if($only_ids)
        {
            return array_keys(static::$enums);
        }

        return static::$enums ?? [];
    }

    public static function enumExists(int $enum) :bool
    {
        return in_array($enum, array_keys(static::$enums));
    }

    public static function cached(bool $clear_cache = false)
    {
        $class_name = \Str::slug(strtr(static::class, [
            '\\' => '-',
        ]));

        $cache_key = "{$class_name}_enum_list";

        if ($clear_cache)
        {
            $cache = Cache::forget($cache_key);
        }

        return Cache::remember($cache_key, 3600 /*secs*/, function () {
            return static::enumList();
        });
    }

    public static function search(string $search, bool $exact = false, bool $first = false)
    {
        $itemCollection = collect(static::cached());

        $filtered = $itemCollection->filter(function($item) use ($search, $exact) {
            if($exact)
            {
                return $item == $search;
            }
            else
            {
                return stripos($item, $search) !== false;
            }
        });

        if($first)
        {
            return $filtered->chunk(1)->first() ?? null;
        }

        return $filtered ?? null;
    }
}
