<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\linked_list\LinkedList;

test('Midpoint is a function', function () {
	assertTrue(function_exists('midpoint'));
});

test('Midpoint returns the middle node of an odd numbered list when the list has 3 elements', function () {
    $list = new LinkedList();
    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');

    assertEquals('b', midpoint($list)->data);
});

test('Midpoint returns the middle node of an odd numbered list when the list has 5 elements', function () {
    $list = new LinkedList();
    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');
    $list->insertLast('d');
    $list->insertLast('e');

    assertEquals('c', midpoint($list)->data);
});

test('Midpoint returns the middle node of an even numbered list when the list has 2 elements', function () {
    $list = new LinkedList();
    $list->insertLast('a');
    $list->insertLast('b');

    assertEquals('a', midpoint($list)->data);
});

test('Midpoint returns the middle node of an even numbered list when the list has 4 elements', function () {
    $list = new LinkedList();
    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');
    $list->insertLast('d');

    assertEquals('b', midpoint($list)->data);
});