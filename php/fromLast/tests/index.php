<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\linked_list\LinkedList;

test('FromLast is a function', function () {
	assertTrue(function_exists('fromLast'));
});

test('FromLast returns the node n elements from the end', function () {
    $list = new LinkedList();
    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');
    $list->insertLast('d');
    $list->insertLast('e');

    assertEquals('b', fromLast($list, 3)->data);
});