<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Function exists', function () {
	assertTrue(function_exists('vowels'));
});

test('Returns the number of vowels used 1', function () {
	assertEquals(5, vowels('aeiou'));
});

test('Returns the number of vowels used when they are capitalized', function () {
	assertEquals(5, vowels('AEIOU'));
});

test('Returns the number of vowels used 2', function () {
	assertEquals(5, vowels('abcdefghijklmnopqrstuvwxyz'));
});

test('Returns the number of vowels used 3', function () {
    assertEquals(0, vowels('bcdfghjkl'));
});
