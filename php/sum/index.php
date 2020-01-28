<?php declare(strict_types=1);

/**
 * Implement function which can sum 2 strings: '111' + '222' = '333'
 *
 * @param string $a First element to sum
 * @param string $b Second element to sum
 * @return string sum of $a and $b
 */
function sum(string $a, string $b): string
{
  $first = str_split($a);
  $second = str_split($b);

  $first = array_reverse($first);
  $second = array_reverse($second);
  $result = [];

  $i = 0;
  $j = 0;

  $memory = 0;

  while (isset($first[$i]) && isset($second[$j])) {
    $sum = $first[$i] + $second[$j];

    if ($sum >= 10) {
      $memory = 1;
      $result[] = $sum - 10;
    } else {
      $result[] = $sum + $memory;
      $memory = 0;
    }

    $i++;
    $j++;
  }

  while (isset($first[$i])) {
    $result[] = $first[$i] + $memory;

    if ($memory > 0) {
      $memory = 0;
    }

    $i++;
  }

  while (isset($second[$j])) {
    $result[] = $second[$j] + $memory;

    if ($memory > 0) {
      $memory = 0;
    }

    $j++;
  }

  $result = array_reverse($result);

  return implode('', $result);
}

// echo sum('11', '9');
// must return 20

// echo sum('111111111111111111111111111111111', '222');
// must return 111111111111111111111111111111333