<?php

class Index
{
    public static function choiceSort(array $array): array
    {
        for ($outer = 0; $outer < count($array) - 1; ++$outer) {
            for ($inner = $outer + 1; $inner < count($array); ++$inner) {
                if ($array[$outer] > $array[$inner]) {
                    $temp = $array[$outer];
                    $array[$outer] = $array[$inner];
                    $array[$inner] = $temp;
                }
            }
        }

        return $array;
    }
}
