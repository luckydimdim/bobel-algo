<?php declare(strict_types=1);

/**
 * @param String $s
 * @return Integer
 */
function lengthOfLongestSubstring(string $s): int {
    if (strlen($s) <= 1) {
        return strlen($s);
    }

    $letters = str_split($s);
    $lengths = [];

    for ($i = 0; $i < count($letters)-1; ++$i) {
        $lengths[] = 1;
        $current = [$letters[$i]];

        for ($j = $i+1; $j < count($letters); ++$j) {
            if (!in_array($letters[$j], $current)) {
                $current[] = $letters[$j];
                $lengths[count($lengths)-1]++;
            } else {
                break;
            }
        }
    }

    rsort($lengths);

    return reset($lengths);
}

// echo lengthOfLongestSubstring('abcabc'); // 3
// echo lengthOfLongestSubstring(''); // 0
// echo lengthOfLongestSubstring('a'); // 1
// echo lengthOfLongestSubstring('abc'); // 3
// echo lengthOfLongestSubstring('aaa'); // 1
// echo lengthOfLongestSubstring('abccabc'); // 3