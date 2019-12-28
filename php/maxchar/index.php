<?php

/**
 * Given a string, return the character that is most
 * commonly used in the string.
 *
 * @example maxChar("abcccccccd") === "c"
 * @example maxChar("apple 1231111") === "1"
 */
function maxChar(string $input): string {
	$charMap = [];

	foreach (str_split($input) as $letter) {
		if (isset($charMap[$letter])) {
			$charMap[$letter] += 1;
		} else {
			$charMap[$letter] = 1;
		}
	}

	$maxChar = '';
	$maxCharRate = 0;

	foreach ($charMap as $char => $rate) { 
		if ($rate > $maxCharRate) {
			$maxCharRate = $rate;
			$maxChar = $char;
		}
	}

	return $maxChar;
}
