<?php declare(strict_types=1);

/**
 * Write a function that accepts a string.  The function should
 * capitalize the first letter of each word in the string then
 * return the capitalized string.
 *
 * @example capitalize('a short sentence') --> 'A Short Sentence'
 * @example capitalize('a lazy fox') --> 'A Lazy Fox'
 * @example capitalize('look, it is working!') --> 'Look, It Is Working!'
 * @param string $input a string to be capitalized 
 * @return string capitalized string
 */ 
function capitalize(string $input): string {
	$words = explode(' ', $input);

	$result = array_map(function ($item) {
		return strtoupper($item[0]) . substr($item, 1);
	}, $words);

	return implode(' ', $result);
}