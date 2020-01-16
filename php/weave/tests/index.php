<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Queues have a peek function', function () {
    $q = new Queue();
	assertTrue(method_exists($q, 'peek'));
});

test('Peek returns, but does not remove, the first value', function () {
    $q = new Queue();
    $q->add(1);
    $q->add(2);

	assertEquals($q->peek(), 1);
    assertEquals($q->peek(), 1);
    assertEquals($q->remove(), 1);
    assertEquals($q->remove(), 2);
});

test('Weave is a function', function () {
	assertTrue(function_exists("weave"));
});

test('Weave can combine two queues', function () {
    $one = new Queue();
    $one->add(1);
    $one->add(2);
    $one->add(3);
    $one->add(4);

    $two = new Queue();
    $two->add('one');
    $two->add('two');
    $two->add('three');
    $two->add('four');    

    $result = weave($one, $two);

	assertEquals(1, $result->remove());
    assertEquals('one', $result->remove());
    assertEquals(2, $result->remove());
    assertEquals('two', $result->remove());
    assertEquals(3, $result->remove());
    assertEquals('three', $result->remove());
    assertEquals(4, $result->remove());
    assertEquals('four', $result->remove());
});
