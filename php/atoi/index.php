<?php declare(strict_types=1);

/**
 * @param String $str
 * @return Integer
 */
function atoi(string $str) {
        $result = [];

        $str = trim($str);

        if (!$str) {
            return 0;
        }

        $letters = str_split($str);

        $multiplier = 1;

        if ($letters[0] === '-') {
            $multiplier = -1;
            array_shift($letters);
        } elseif ($letters[0] === '+') {
            array_shift($letters);
        }

        $index = 0;

        if (!is_numeric($letters[$index])) {
            return 0;
        }

        while (isset($letters[$index]) && is_numeric($letters[$index])) {
            $result[] = $letters[$index];
            $index++;
        }

        $result = (int) implode($result);

        $minBound = -pow(2, 31);
        $maxBound = pow(2, 31)-1;

        $result = (int) $result * $multiplier;

        if ($result > $maxBound) {
            return $maxBound;
        }

        if ($result < $minBound) {
            return $minBound;
        }

        return $result;
}

// echo atoi("42") ."\n";
// echo atoi("-21474836489") ."\n";
// echo atoi("   -42") ."\n";
// echo atoi("words and 987") ."\n";
// echo atoi("4193 with words") ."\n";
// echo atoi("3.14159") ."\n";
// echo atoi("   -115579378e25") ."\n";