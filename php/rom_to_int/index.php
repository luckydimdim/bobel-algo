<?php declare(strict_types=1);

/**
 * @param String $s
 * @return Integer
 */
function romanToInt($s) {
    $result = 0;

    if (!$s) {
        return $result;
    }

    $digits = [
        'IV' => 4,
        'IX' => 9,
        'XL' => 40,
        'XC' => 90,
        'CD' => 400,
        'CM' => 900,
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    foreach ($digits as $name => $value) {
        $times = substr_count($s, $name);
        $result += $value * $times;
        $s = str_replace($name, '', $s);
    }

    return $result;
}

// echo romanToInt("III");