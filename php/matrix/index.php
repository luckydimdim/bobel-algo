<?php declare(strict_types=1);

/**
 * Write a function that accepts an integer N
 * and returns a NxN spiral matrix.
 * 
 * @example
 *  matrix(4)
 *     [[1,  2,  3, 4],
 *     [12, 13, 14, 5],
 *     [11, 16, 15, 6],
 *     [10,  9,  8, 7]]
 *
 * @param int $n size of martix
 * @return array spiral matrix
 */
function matrix(int $n): array {
    $spiral = [];

    for ($i = 0; $i < $n; ++$i) {
        $array = [];

        for ($j = 0; $j < $n; ++$j) {
            $array[] = 0;
        }

        $spiral[] = $array;
    }

    walk($spiral);

    return $spiral;
}

function walk(&$spiral, $row = 0, $col = 0, $direction = 'right', $step = 1) {
    $size = count($spiral) * count($spiral);

    if ($step === $size + 1) {
        return;
    }

    $spiral[$row][$col] = $step;

    switch ($direction) {
        case 'right':
            if (!isset($spiral[$row][$col + 1]) || $spiral[$row][$col + 1] !== 0) {
                $direction = 'down';
                $row++;
            } else {
                $col++;
            }
            break;

        case 'down':
            if (!isset($spiral[$row + 1]) || $spiral[$row + 1][$col] !== 0) {
                $direction = 'left';
                $col--;
            } else {
                $row++;
            }
            break;

        case 'left':
            if (!isset($spiral[$row][$col - 1]) || $spiral[$row][$col - 1] !== 0) {
                $direction = 'top';
                $row--;
            } else {
                $col--;
            }
            break;

        case 'top':
            if (!isset($spiral[$row - 1]) || $spiral[$row - 1][$col] !== 0) {
                $direction = 'right';
                $col++;
            } else {
                $row--;
            }        
            break;
    }

    walk($spiral, $row, $col, $direction, ++$step);
}

$result = matrix(4);
foreach ($result as $row) {
    foreach ($row as $cell) {
        echo $cell ." ";
    }

    echo "\n";
}