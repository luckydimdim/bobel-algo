<?php declare(strict_types=1);

/**
 * @param Integer[] $nums
 * @return NULL
 */
function nextPermutation(&$nums) {
    if (!$nums) {
        return;
    }

    if (count($nums) === 1) {
        return $nums;
    }

    $permutationPotential = false;

    for ($i = 0; $i < count($nums) - 1; ++$i) {
        if ($nums[$i+1] > $nums[$i]) {
            $permutationPotential = true;

            break;
        }
    }

    if (!$permutationPotential) {
        for ($i = 0; $i < count($nums); ++$i) {
            array_push($nums, array_splice($nums, count($nums) - $i - 1, 1)[0]);
        }

        return;
    }

    $minIndex = 0;
    $currentIndex = 0;
    $nextIndex = 1;

    while (isset($nums[$nextIndex])) {
        if ($nums[$nextIndex] > $nums[$currentIndex]) {
            $minIndex = $currentIndex;
        }

        $currentIndex++;
        $nextIndex++;
    }

    $nextValue = $nums[$minIndex+1];
    $nextIndex = $minIndex+1;

    for ($i = $minIndex + 1; $i < count($nums); ++$i) {
        if ($nums[$i] > $nums[$minIndex] && $nums[$i] <= $nextValue) {
            $nextValue = $nums[$i];
            $nextIndex = $i;
        }
    }

    $temp = $nums[$nextIndex];
    $nums[$nextIndex] = $nums[$minIndex];
    $nums[$minIndex] = $temp;

    $permutationPotential = false;

    for ($i = $minIndex + 1; $i < count($nums) - 1; ++$i) {
        if ($nums[$i+1] < $nums[$i]) {
            $permutationPotential = true;

            break;
        }
    }

    if ($permutationPotential) {
        $start = $minIndex + 1;
        $end = count($nums) - 1;

        while ($start < $end) {
            echo "before) $start - $end ". implode($nums) ."\n";
            [$nums[$start], $nums[$end]] = [$nums[$end], $nums[$start]];
            echo "after) $start - $end ". implode($nums) ."\n";

            $start++;
            $end--;
        }
    }
}

$nums = [2,1,2,2,2,2,2,1];
nextPermutation($nums);
print_r($nums);

// 7 6 4 3 1
// 1 3 4 6 7

// 1,2,3 -> 1,3,2
// 3,2,1 -> 1,2,3
// 1,1,5 -> 1,5,1
// 1 -> 1
// 1,2,3,2,3,2,3 -> 1,2,3,2,3,3,2
// 1,3,2 -> 2,1,3
// 1,2 -> 2,1
// 5,4,7,5,3,2 -> 5,5,2,3,4,7
// 2,3,1,3,3 -> 2,3,3,1,3 -> 2,3,3,3,1
// 2,1,2,2,2,2,2,1 -> 2,2,1,2,2,2,2,1 ->



