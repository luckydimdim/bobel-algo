<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\linked_list\Node;
use \bobel\linked_list\LinkedList;

test('Circular exists', function () {
	assertTrue(function_exists('circular'));
});

test('Circular detects circular linked lists', function () {
    $list = new LinkedList();

    $a = new Node('a');
    $b = new Node('b');
    $c = new Node('c');

    $list->head = $a;
    $a->next = $b;
    $b->next = $c;
    $c->next = $b;

    assertTrue(circular($list));
});

test('Circular detects circular linked lists linked at the head', function () {
    $list = new LinkedList();

    $a = new Node('a');
    $b = new Node('b');
    $c = new Node('c');

    $list->head = $a;
    $a->next = $b;
    $b->next = $c;
    $c->next = $a;

    assertTrue(circular($list));
});

test('Circular detects non-circular linked lists', function () {
    $list = new LinkedList();

    $a = new Node('a');
    $b = new Node('b');
    $c = new Node('c');

    $list->head = $a;
    $a->next = $b;
    $b->next = $c;
    $c->next = null;

    assertFalse(circular($list));
});