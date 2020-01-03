<?php declare(strict_types=1);

/**
 * Write a function that accepts a positive number N.
 * The function should console log a step shape
 * with N levels using the # character.  Make sure the
 * step has spaces on the right hand side!
 *
 * @example steps(4)
 * '# '
 * '##  '
 * '### '
 * '####'
 * @param int $n number of steps
 * @return string ledder
 */
function steps(int $n): string {
	global $result;
	$result = [];

	steps_recursive($n);

	return implode("\n", $result);
}

$result = [];

function steps_recursive(int $rows, int $row = 0, string $stage = '') {
	global $result;

	if ($rows === $row) {
		return;
	}

	if (strlen($stage) === $rows) {
		$result[] = $stage;
		steps_recursive($rows, ++$row);
		return;
	}

	if (strlen($stage) <= $row) {
		steps_recursive($rows, $row, $stage .'#');
	} else {
		steps_recursive($rows, $row, $stage .' ');
	}
}

// echo steps(4);