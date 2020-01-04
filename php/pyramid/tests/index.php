<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Pyramid is a function', function () {
	assertTrue(function_exists('pyramid'));
});

test('Prints a pryamid for n = 2', function () {
	assertEquals(" # \n###", pyramid(2));
});

test('Prints a pryamid for n = 3', function () {
	assertEquals("  #  \n ### \n#####", pyramid(3));
});

test('Prints a pryamid for n = 4', function () {
	assertEquals("   #   \n  ###  \n ##### \n#######", pyramid(4));
});
