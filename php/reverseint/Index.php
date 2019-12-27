<?php

class Index
{
    /**
     * Given an integer, return an integer 
     * that is the reverse ordering of numbers.
     *
     * @param int $number
     * @return int
     * @example reverseInt(500) === 5
     * @example reverseInt(-15) === -51
     * @example reverseInt(-90) === -9
     * @example reverseInt(15) === 51
     * @example reverseInt(981) === 189
     */
    public static function reverseInt(int $number): int
    {
        $string = (string) $number;
        $chars = str_split($string);
        $reverted = '';

        foreach ($chars as $char) {
            if ($char === '-') {
                continue;
            }

            $reverted = $char . $reverted;
        }

        $result = (int) $reverted;

        if ($number < 0) {
            $result *= -1;
        }

        return $result;
    }
}
