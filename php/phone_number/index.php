<?php declare(strict_types=1);

function letterCombinations(string $digits) {
    if (!$digits) {
        return [];
    }

    $buttons = str_split($digits);
    $letters = [
        '2' => ['a', 'b', 'c'],
        '3' => ['d', 'e', 'f'],
        '4' => ['g', 'h', 'i'],
        '5' => ['j', 'k', 'l'],
        '6' => ['m', 'n', 'o'],
        '7' => ['p', 'q', 'r', 's'],
        '8' => ['t', 'u', 'v'],
        '9' => ['w', 'x', 'y', 'z']
    ];

    $result = [];
    backtrack('', $buttons, $letters, $result);

    return $result;
}

function backtrack($combination, $buttons, $letters, &$result) {
    if (!$buttons) {
        $result[] = $combination;
        return;
    }

    $button = array_shift($buttons);

    foreach ($letters[$button] as $letter) {
        backtrack($combination . $letter, $buttons, $letters, $result);
    }
}

print_r(letterCombinations('23'));