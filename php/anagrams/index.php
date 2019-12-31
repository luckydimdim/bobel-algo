<?php declare(strict_types=1);

/**
 * Check to see if two provided strings are anagrams of eachother.
 * One string is an anagram of another if it uses the same characters
 * in the same quantity. Only consider characters, not spaces
 * or punctuation.  Consider capital letters to be the same as lower case
 *
 * @example anagrams('rail safety', 'fairy tales') --> True
 * @example anagrams('RAIL! SAFETY!', 'fairy tales') --> True
 * @example anagrams('Hi there', 'Bye there') --> False
 * @param string $a first string to compare
 * @param string $b second string to compare
 * @return bool result of string comparison
 */
function anagrams1(string $a, string $b): bool {
	$mapA = convertStringToCharMap($a);
	$mapB = convertStringToCharMap($b);

	if (count(array_keys($mapA)) !== count(array_keys($mapB))) {
		return false;		
	}

	foreach ($mapA as $letter => $count) {
		if (!isset($mapB[$letter])) {
			return false;
		}

		if ($count !== $mapB[$letter]) {
			return false;
		}
	}

	return true;
}

function convertStringToCharMap(string $value):array {
	$result = [];

	$value = preg_replace("/\W/", "", $value);
	$value = strtolower($value);
	$chars = str_split($value);

	foreach ($chars as $char) {
		if (!isset($result[$char])) {
			$result[$char] = 1;
		} else {
			$result[$char]+=1;
		}
	}

	return $result;
}

function anagrams(string $a, string $b): bool {
	$arrA = str_split(strtolower($a));
	$arrB = str_split(strtolower($b));

	sort($arrA);
	sort($arrB);

	$normalizedA = preg_replace("/\W/", "", implode("", $arrA));
	$normalizedB = preg_replace("/\W/", "", implode("", $arrB));

	return $normalizedA === $normalizedB;
}

// echo anagrams("a! bc", "Cb- a");
// echo anagrams('hello', 'llohe');










