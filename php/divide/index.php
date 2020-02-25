<?php declare(strict_types=1);

/**
 * @param Integer $dividend
 * @param Integer $divisor
 * @return Integer
 */
function divide2($dividend, $divisor) {
    $multiplier = 1;
    $multiplier2 = 1;

    if ($divisor < 0) {
        $divisor *= -1;
        $multiplier = -1;
    }

    if ($dividend < 0) {
        $dividend *= -1;
        $multiplier2 = -1;
    }

    $times = 0;

    while ($dividend >= $divisor) {
        $times++;
        $dividend -= $divisor;
    }

    $result = $times * $multiplier * $multiplier2;

    $min = pow(-2, 31);
    $max = pow(2, 31)-1;

    if ($result < $min) {
        $result = $min;
    }

    if ($result > $max) {
        $result = $max;
    }

    return $result;
}

function divide($dividend, $divisor) {
    $total = 0;
    $multiplier = 1;
    $multiplier2 = 1;

    $multiplier = (($dividend < 0) ^ ($divisor < 0)) ? -1 : 1;

    if ($divisor < 0) {
        $divisor *= -1;
    }

    if ($dividend < 0) {
        $dividend *= -1;
    }

    if ($dividend < $divisor) {
        return 0;
    }

    while ($dividend >= $divisor) {
        $bitwise   = 0;
        $tempTotal = 1;
        $tempSum   = $divisor;

        while ($dividend >= $tempSum << $bitwise) {
            $tempSum = $tempSum << $bitwise;
            $tempTotal = $tempTotal << $bitwise;
            $bitwise++;
        }

        $total += $tempTotal;
        $dividend -= $tempSum;
    }

    $total *= $multiplier;

    if ($total > 2147483647) {
        return 2147483647;
    } elseif ($total < -2147483648) {
        return 2147483648;
    } else {
        return $total;
    }
}

echo divide(-2147483648, 1);
