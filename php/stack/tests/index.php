<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Stack is a class', function () {
	assertTrue(class_exists('Stack'));
});

test('Stack can add and remove items', function () {
    $s = new Stack();

    $s->push(1);
	assertEquals(1, $s->pop());

    $s->push(2);
    assertEquals(2, $s->pop());
});

test('Stack can follows first in, last out', function () {
    $s = new Stack();

    $s->push(1);
    $s->push(2);
    $s->push(3);

    assertEquals(3, $s->pop());
    assertEquals(2, $s->pop());
    assertEquals(1, $s->pop());
});

test('Peek returns the first element but doesnt pop it', function () {
	$s = new Stack();

    $s->push(1);
    $s->push(2);
    $s->push(3);

    assertEquals(3, $s->peek());
    assertEquals(3, $s->pop());
    assertEquals(2, $s->peek());
    assertEquals(2, $s->pop());
    assertEquals(1, $s->peek());
    assertEquals(1, $s->pop());
});
