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

test('Size returns the number of items in the linked list', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    $list->insertFirst(2);
    $list->insertFirst(3);
    $list->insertFirst(4);
    assertEquals(4, $list->size());
});

test('GetFirst returns the first element', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    assertEquals(1, $list->GetFirst()->data);

    $list->insertFirst(2);
    assertEquals(2, $list->GetFirst()->data);
});

test('GetLast returns the last element', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    assertEquals(1, $list->GetLast()->data);

    $list->insertFirst(2);
    assertEquals(1, $list->GetLast()->data);
});

test('Clear', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    $list->insertFirst(1);
    $list->insertFirst(1);
    $list->insertFirst(1);
    assertEquals(4, $list->size());

    $list->clear();

    assertEquals(0, $list->size());
});

test('RemoveFirst removes the first node when the list has a size of one', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    $list->removeFirst();
    assertEquals(0, $list->size());
});

test('RemoveFirst removes the first node when the list has a size of three', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(3);
    $list->insertFirst(2);
    $list->insertFirst(1);
    $list->removeFirst();
    assertEquals(2, $list->size());
    assertEquals(2, $list->getFirst()->data);
});

test('RemoveLast removes the last node when list is empty', function () {
    $list = new \bobel\linked_list\LinkedList();

    try {
        $list->removeLast();
        assertTrue(true);
    } catch (\Exception $e) {
        assertTrue(false);
    }
});

test('RemoveLast removes the last node when list is length 1', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(1);
    $list->removeLast();
    assertEquals(null, $list->head);
});

test('RemoveLast removes the last node when list is length 2', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(2);
    $list->insertFirst(1);
    $list->removeLast();

    assertEquals(1, $list->size());
    assertEquals(1, $list->getFirst()->data);
});

test('RemoveLast removes the last node when list is length 3', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertFirst(3);
    $list->insertFirst(2);
    $list->insertFirst(1);
    $list->removeLast();

    assertEquals(2, $list->size());
    assertEquals(1, $list->getFirst()->data);
});

test('InsertLast adds to the end of the list', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);
    $list->insertLast(2);

    assertEquals(2, $list->getLast()->data);

    $list->insertLast(3);

    assertEquals(1, $list->getFirst()->data);
    assertEquals(3, $list->getLast()->data);
});

test('GetAt returns the node at given index', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);
    $list->insertLast(2);
    $list->insertLast(3);
    $list->insertLast(4);

    assertEquals(null, $list->getAt(5));

    assertEquals(1, $list->getAt(0)->data);
    assertEquals(2, $list->getAt(1)->data);
    assertEquals(3, $list->getAt(2)->data);
    assertEquals(4, $list->getAt(3)->data);
});

test('RemoveAt removeAt doesnt crash on an empty list', function () {
    $list = new \bobel\linked_list\LinkedList();

    try {
        $list->removeAt(0);
        assertTrue(true);
    } catch (\Exception $e) {
        assertTrue(false);
    }
});

test('RemoveAt doesnt crash on an index out of bounds', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);

    try {
        $list->removeAt(10);
        assertTrue(true);
    } catch (\Exception $e) {
        assertTrue(false);
    }
});

test('RemoveAt works on the last node', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);
    $list->insertLast(2);
    $list->insertLast(3);
    $list->insertLast(4);

    assertEquals(4, $list->getAt(3)->data);

    $list->removeAt(3);

    assertEquals(null, $list->getAt(3));
});

test('InsertAt inserts a new node with data at the 0 index when the list is empty', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertAt('hi', 0);
    assertEquals('hi', $list->getAt(0)->data);
});

test('InsertAt inserts a new node with data at the 0 index when the list has elements', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');
    $list->insertAt('hi', 0);

    assertEquals('hi', $list->getAt(0)->data);
    assertEquals('a', $list->getAt(1)->data);
    assertEquals('b', $list->getAt(2)->data);
    assertEquals('c', $list->getAt(3)->data);
});

test('InsertAt inserts a new node with data at the 0 index when the list has elements', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertLast('c');
    $list->insertLast('d');
    $list->insertAt('hi', 2);

    assertEquals('a', $list->getAt(0)->data);
    assertEquals('b', $list->getAt(1)->data);
    assertEquals('hi', $list->getAt(2)->data);
    assertEquals('c', $list->getAt(3)->data);
    assertEquals('d', $list->getAt(4)->data);
});

test('InsertAt inserts a new node with data at a last index', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertAt('hi', 2);

    assertEquals('a', $list->getAt(0)->data);
    assertEquals('b', $list->getAt(1)->data);
    assertEquals('hi', $list->getAt(2)->data);
});

test('InsertAt insert a new node when index is out of bounds', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast('a');
    $list->insertLast('b');
    $list->insertAt('hi', 30);

    assertEquals('a', $list->getAt(0)->data);
    assertEquals('b', $list->getAt(1)->data);
    assertEquals('hi', $list->getAt(2)->data);
});

test('ForEach applies a transform to each node', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);
    $list->insertLast(2);
    $list->insertLast(3);
    $list->insertLast(4);

    $list->forEach(fn($node) => $node->data += 10);

    assertEquals(11, $list->getAt(0)->data);
    assertEquals(12, $list->getAt(1)->data);
    assertEquals(13, $list->getAt(2)->data);
    assertEquals(14, $list->getAt(3)->data);
});

test('ForEach applies a transform to each node', function () {
    $list = new \bobel\linked_list\LinkedList();

    $list->insertLast(1);
    $list->insertLast(2);
    $list->insertLast(3);
    $list->insertLast(4);

    foreach ($list->iterateNodes() as $node) {
        $node->data += 10;
    }

    assertEquals(11, $list->getAt(0)->data);
    assertEquals(12, $list->getAt(1)->data);
    assertEquals(13, $list->getAt(2)->data);
    assertEquals(14, $list->getAt(3)->data);
});