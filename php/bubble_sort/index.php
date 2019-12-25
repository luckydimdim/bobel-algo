<?php

class Index
{
    public static function bubbleSort($array)
    {
        for ($outer = 1; $outer < count($array); ++$outer) {
            for ($inner = 0; $inner < count($array); ++$inner) {
                if ($array[$outer] < $array[$inner]) {
                    $temp = $array[$outer];
                    $array[$outer] = $array[$inner];
                    $array[$inner] = $temp;
                }
            }
        }

        return $array;
    }
}
