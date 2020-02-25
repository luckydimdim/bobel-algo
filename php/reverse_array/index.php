<?php declare(strict_types=1);

function reverseArray(array &$array): void {
    if (count($array) <= 1) {
        return;
    }

    $start = 0;
    $end = count($array)-1;

    while ($start < $end) {
        [$array[$start], $array[$end]] = [$array[$end], $array[$start]];

        $start++;
        $end--;
    }
}

/*$array = [1];
reverseArray($array);
print_r($array);*/

/*$array = [1, 2];
reverseArray($array);
print_r($array);*/

/*$array = [1, 2, 3, 4];
reverseArray($array);
print_r($array);*/

/*$array = [1, 2, 3];
reverseArray($array);
print_r($array);*/