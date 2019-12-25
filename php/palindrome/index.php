<?php

class Index
{
    public static function palindrome(string $str): bool
    {
        $reversed = '';

        for ($index = 0; $index < strlen($str); ++$index) {
            $reversed = $str[$index] . $reversed;
        }

        /*$chars = str_split($str);
        $chars = array_reverse($chars);
        $reversed = implode('', $chars);*/

        return $str === $reversed;
    }
}
