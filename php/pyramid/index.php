<?php declare(strict_types=1);

/**
 * Write a function that accepts a positive number N.
 * The function should console log a pyramid shape
 * with N levels using the # character.  Make sure the
 * pyramid has spaces on both the left *and* right hand sides
 *
 * @example pyramid(3):
 * '  #  '
 * ' ### '
 * '#####'
 *
 * @param int $n number of pyramid levels
 * @return string
 */
function pyramid(int $n): string {
	global $result;

	$result = [];

	buildPyramid($n);

	return implode("\n", $result);
}

$result = [];

function buildPyramid(int $rows, int $row = 0, string $stage = '') {
	global $result;

	if ($rows === $row) {
		return;
	}

	$width = $rows * 2 - 1;
	$center = $rows - 1;

	if (strlen($stage) === $width) {
		$result[] = $stage;
		buildPyramid($rows, ++$row);

		return;
	}

	if (strlen($stage) < $center - $row || strlen($stage) > $center + $row) {
		$stage .= ' ';
	} else {
		$stage .= '#';
	}

	buildPyramid($rows, $row, $stage);
}

// echo pyramid(5);


