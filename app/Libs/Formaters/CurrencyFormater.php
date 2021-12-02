<?php

namespace App\Libs\Formaters;

class CurrencyFormater
{
    public static $default_currency = 'USD';

    public static $currency_codes   = [
        'USD' => [
            'special_code'       => '$',
            'left_position'      => true,
            'universal_code'     => 'USD',
            'international_name' => 'US Dollar',
            'regional_name'      => 'US Dollar',
            'tausend_separator' => '.',
            'cents_separator'   => ',',
            'cents_precicion'    => 2,
        ],
        'BRL' => [
            'special_code'       => 'R$',
            'left_position'      => true,
            'universal_code'     => 'BRL',
            'international_name' => 'Brazilian Real',
            'regional_name'      => 'Real',
            'tausend_separator' => '.',
            'cents_separator'   => ',',
            'cents_precicion'    => 2,
        ],
    ];

    public static function moneyFormat(string $value = null, string $currency_code = null)
    {
        if(!$value)
            return;

        $currency_code  = $currency_code ? $currency_code : self::$default_currency;
        $currency       = in_array($currency_code, array_keys(self::$currency_codes))
                    ? self::$currency_codes[$currency_code]
                    : self::$currency_codes[self::$default_currency];

        $left_position      = $currency['left_position']     ?? true;
        $special_code       = $currency['special_code']      ?? '$';
        $cents_precicion    = $currency['cents_precicion']   ?? 2;
        $tausend_separator  = $currency['tausend_separator'] ?? '.';
        $cents_separator    = $currency['cents_separator']   ?? ',';
        $formated_number    = self::toCurrency(
            $value,
            $tausend_separator,
            $cents_precicion,
            $cents_separator
        );

        $formated_with_code = $left_position ? $special_code.' '.$formated_number : $formated_number.' '.$special_code;

        return [
            'formated_number'       => $formated_number,
            'formated_with_code'    => $formated_with_code,
            'currency'              => $currency,
        ];
    }

    public static function toCurrency(
        string $number,
        string $tausend_separator = '.',
        int $cents_precicion = 2,
        string $cents_separator = ',')
    {
        return number_format(
            $number,
            $cents_precicion,
            $cents_separator,
            $tausend_separator);
    }
}
