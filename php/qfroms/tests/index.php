<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

it('Queue is a class', function () {
	assertTrue(class_exists('Queue'));
});

test('Can add elements to a queue', function () {
    $q = new Queue();

    try {
        $q->add(1);    
    } catch(\Exception $e) {
        assertFalse(true);
    }
    
	assertTrue(true);
});

test('Can remove elements from a queue', function () {
    $q = new Queue();
    $q->add(1);
    
    assertEquals(1, $q->remove());
});

test('Order of elements is maintained', function () {
	$q = new Queue();

    $q->add(1);
    $q->add(2);
    $q->add(3);

    assertEquals(1, $q->remove());
    assertEquals(2, $q->remove());
    assertEquals(3, $q->remove());
});
