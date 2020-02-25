<?php declare(strict_types=1);

function sumOfArray(array $array): int {
    if (count($array) <= 1) {
        return (int) implode($array);
    }

    $result = 0;
    $start = 0;
    $end = count($array)-1;

    while ($start <= $end) {
        $result += $array[$start];

        if ($start != $end) {
             $result += $array[$end];
        }

        $start++;
        $end--;
    }


    return $result;
}

echo sumOfArray([1]);
echo "\n";
echo sumOfArray([1, 2]);
echo "\n";
echo sumOfArray([1, 2, 3]);
echo "\n";
echo sumOfArray([1, 2, 3, 4]);