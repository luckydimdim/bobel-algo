<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

test('List is a class', function () {
	assertTrue(class_exists('\bobel\linked_list\LinkedList'));
});

test('Node is a class', function () {
    assertTrue(class_exists('\bobel\linked_list\Node'));
});

test('A node has properties "data" and "next"', function () {
    assertTrue(property_exists(new \bobel\linked_list\Node(1), 'data'));
    assertTrue(property_exists(new \bobel\linked_list\Node(1), 'next'));
});

test('Insert First appends a node to the start of the list', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    assertEquals(1, $list->head->data);

    $list->insertFirst(2);
    assertEquals(2, $list->head->data);
});