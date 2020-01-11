<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Function exists', function () {
	assertTrue(function_exists('fib'));
});

test('Calculates correct fib value for 1', function () {
	assertEquals(1, fib(1));
});

test('Calculates correct fib value for 2', function () {
	assertEquals(1, fib(2));
});

test('Calculates correct fib value for 3', function () {
    assertEquals(2, fib(3));
});

test('Calculates correct fib value for 4', function () {
    assertEquals(3, fib(4));
});

test('Calculates correct fib value for 39', function () {
    assertEquals(63245986, fib(39));
});
