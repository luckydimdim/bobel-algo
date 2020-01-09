<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Function exists', function () {
	assertTrue(function_exists('matrix'));
});

test('Matrix produces a 2x2 array', function () {
    $expected = [
        [1, 2],
        [4, 3]
    ];
    $actual = matrix(2);

	assertEquals($expected, $actual);
});

test('Matrix produces a 3x3 array', function () {
    $expected = [
        [1, 2, 3],
        [8, 9, 4],
        [7, 6, 5]
    ];
    $actual = matrix(3);

    assertEquals($expected, $actual);
});

test('Matrix produces a 4x4 array', function () {
    $expected = [
        [1,  2,  3,  4],
        [12, 13, 14, 5],
        [11, 16, 15, 6],
        [10, 9,  8,  7]
    ];
    $actual = matrix(4);

    assertEquals($expected, $actual);
});
