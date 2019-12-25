<?php

class Index
{
    public static function insertSort(array $array)
    {
        for ($outer = 1; $outer < count($array); ++$outer) {
            for ($pointer = $outer; $pointer > 0 && $array[$pointer - 1] > $array[$pointer]; $pointer--) {
                $temp = $array[$pointer - 1];
                $array[$pointer - 1] = $array[$pointer];
                $array[$pointer] = $temp;
            }
        }

        return $array;
    }
}
