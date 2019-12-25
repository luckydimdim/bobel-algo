<?php

class Index
{
    public static function quickSort(array &$array): array
    {
        if (count($array) <= 1) {
            return [];
        }

        $barrier = $array[0];
        $left = [];
        $middle = [];
        $right = [];

        for ($index = 0; $index < count($array); ++$index) {
            if ($array[$index] < $barrier) {
                $left[] = $array[$index];
            } elseif ($array[$index] === $barrier) {
                $middle[] = $array[$index];
            } else {
                $right[] = $array[$index];
            }
        }

        self::quickSort($left);
        self::quickSort($right);

        $result = array_merge($left, $middle, $right);

        for ($index = 0; $index < count($result); ++$index) {
            $array[$index] = $result[$index];
        }

        return $array;
    }
}
