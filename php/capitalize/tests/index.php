<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Capitalize is a function', function () {
	assertTrue(function_exists('capitalize'));
});

test('capitalizes the first letter of every word in a sentence', function () {
  assertEquals(
  	'Hi There, How Is It Going?',
  	capitalize('hi there, how is it going?'));
});

test('capitalizes the first letter', function () {
  assertEquals(
  	'I Love Breakfast At Bill Miller Bbq',
  	capitalize('i love breakfast at bill miller bbq'));
});