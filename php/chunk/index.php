<?php declare(strict_types=1);

/**
 * Given an array and chunk size, divide the array into many subarrays
 * where each subarray is of length size
 *
 * @example chunk([1, 2, 3, 4], 2) --> [[ 1, 2], [3, 4]]
 * @example chunk([1, 2, 3, 4, 5], 2) --> [[ 1, 2], [3, 4], [5]]
 * @example chunk([1, 2, 3, 4, 5, 6, 7, 8], 3) --> [[ 1, 2, 3], [4, 5, 6], [7, 8]]
 * @example chunk([1, 2, 3, 4, 5], 4) --> [[ 1, 2, 3, 4], [5]]
 * @example chunk([1, 2, 3, 4, 5], 10) --> [[ 1, 2, 3, 4, 5]]
 * @param array $sequence input array
 * @param int   $size     size of chunk
 * @return array chunked array
 */
function chunk1(array $sequence, int $size): array {
	$result = [];

	foreach ($sequence as $element) {
		if (!$result || count($result[count($result)-1]) === $size) {
			$result[] = [$element];
		} else {
			$result[count($result)-1][] = $element;
		}
	}

	return $result;
}

function chunk2(array $sequence, int $size): array {
	$result = [];

	foreach ($sequence as $element) {
		$last = [];

		if (!$result || count(end($result)) === $size) {
			$result[] = [$element];
		} else {
			$result[count($result)-1][] = $element;
		}
	}

	return $result;
}

function chunk(array $sequence, int $size): array {
	$result = [];
	$index = 0;

	while (count($sequence) > $index) {
		$result[] = array_slice($sequence, $index, $size);
		$index += $size;
	}

	return $result;
}

// var_dump(chunk([1, 2, 3, 4, 5, 6, 7, 8], 3));
