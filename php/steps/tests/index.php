<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Steps is a function', function () {
	assertTrue(function_exists('steps'));
});

test('Steps called with n = 1', function () {
	assertEquals('#', steps(1));
});

test('Steps called with n = 2', function () {
	assertEquals("# \n##", steps(2));
});

test('Steps called with n = 3', function () {
	assertEquals("#  \n## \n###", steps(3));
});
