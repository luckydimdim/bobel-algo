<?php declare(strict_types=1);

/**
 * Write a function that returns the number of vowels
 * used in a string.  Vowels are the characters 'a', 'e'
 * 'i', 'o', and 'u'.
 *
 * @example vowels('Hi There!') --> 3
 * @example vowels('Why do you ask?') --> 4
 * @example vowels('Why?') --> 0
 * @param string $input string to search vovels
 * @return int quantity of vovels
 */
function vowels(string $input): int {
    preg_match_all("/[aeoui]/i", $input, $matches);

    return count($matches[0]);
}

// echo vowels("abcui");
