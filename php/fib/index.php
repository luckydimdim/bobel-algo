<?php declare(strict_types=1);

/**
 * Print out the n-th entry in the fibonacci series.
 * The fibonacci series is an ordering of numbers where
 * each number is the sum of the preceeding two.
 *
 * For example, the sequence [0, 1, 1, 2, 3, 5, 8, 13, 21, 34]
 * forms the first ten entries of the fibonacci series.
 * @example fib(4) === 3
 * @param int $n number of entry in sequence
 * @return int element of fibonacci series
 */
function fib(int $n): int {
    $result = [0, 1];

    for ($i = 2; $i <= $n; ++$i) {
        $result[] = $result[$i - 2] + $result[$i - 1];
    }

    return $result[$n];
}