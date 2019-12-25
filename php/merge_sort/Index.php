<?php

class Index
{
    public static function merge(array $left, array $right): array
    {
        $result = [];
        $leftIndex = $rightIndex = 0;

        while ($leftIndex < count($left) && $rightIndex < count($right)) {
            if ($left[$leftIndex] <= $right[$rightIndex]) {
                $result[] = $left[$leftIndex];
                $leftIndex++;
            } else {
                $result[] = $right[$rightIndex];
                $rightIndex++;
            }
        }

        while ($leftIndex < count($left)) {
            $result[] = $left[$leftIndex];
            $leftIndex++;
        }

        while ($rightIndex < count($right)) {
            $result[] = $right[$rightIndex];
            $rightIndex++;
        }

        return $result;
    }

    public static function mergeSort(array $array): array
    {
        if (count($array) <= 1) {
            return [];
        }

        $middle = floor(count($array) / 2);

        $left = [];
        $right = [];

        $leftIndex = $rightIndex = 0;

        for ($index = 0; $index < $middle; ++$index) {
            $left[$leftIndex] = &$array[$index];
            $leftIndex++;
        }

        for ($index = $middle; $index < count($array); ++$index) {
            $right[$rightIndex] = &$array[$index];
            $rightIndex++;
        }

        self::mergeSort($left);
        self::mergeSort($right);

        $result = self::merge($left, $right);

        for ($index = 0; $index < count($result); ++$index) {
            $array[$index] = $result[$index];
        }

        return $array;
    }
}
