<?php

/**
 * Write a program that console logs the numbers
 * from 1 to n. But for multiples of three print
 * “fizz” instead of the number and for the multiples
 * of five print “buzz”. For numbers which are multiples
 * of both three and five print “fizzbuzz”.
 * @example fizzBuzz(5);
 * 1
 * 2
 * fizz
 * 4
 * buzz
 */
function fizzBuzz(int $digit): string {
	$result = [];

	for ($i = 1; $i <= $digit; ++$i) {
		$current = '';

		if ($i % 3 === 0) {
			$current = 'fizz';
		}

		if ($i % 5 === 0) {
			$current .= 'buzz';
		}

		if (!$current) {
			$current = $i;
		}

		$result[] = $current;
	}

	return implode("\n", $result);
}

// echo fizzBuzz(5);
