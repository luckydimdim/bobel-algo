<?php declare(strict_types=1);

/**
 * @param Integer[] $nums
 * @return Integer
 */
function removeDuplicates(&$nums) {
    $result = 0;

    $digit = $nums[0];
    $i = 1;

    while ($i < count($nums)) {
        if ($nums[$i] === $digit) {
            array_splice($nums, $i, 1);
        } else {
            $digit = $nums[$i];
            $i++;
        }
    }

    return $result;
}

// $arr = [0,0,1,1,1,2,2,3,3,4];
$arr = [1,1,2];
$len = removeDuplicates($arr);

print_r($arr);