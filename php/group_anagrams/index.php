<?php

/**
 * @param String[] $strs
 * @return String[][]
 */
function groupAnagrams($strs) {
    $result = [];

    // $letters = range('a', 'z');
    // $digits = range(0, 25);
    // $hashMap = array_combine($letters, $digits);
    // $anagrams = [];

    foreach ($strs as $combination) {
        $key = str_split($combination);
        sort($key);
        $key = implode($key);

        $anagrams[$key][] = $combination;
    }

    $result = array_values($anagrams);

    return $result;
}

print_r(groupAnagrams(["eat","tea","tan","ate","nat","bat"]));
// [["bat"],["nat","tan"],["ate","eat","tea"]]




