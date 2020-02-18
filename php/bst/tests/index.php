<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\bst\Node;

test('Node exists', function () {
	assertTrue(class_exists('\bobel\bst\Node'));
});

test('Node can insert correctly', function () {
    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(17);

    $this->assertEquals(5, $node->left->data);
    $this->assertEquals(15, $node->right->data);
    $this->assertEquals(17, $node->right->right->data);
});

test('Node can insert correctly', function () {
    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(20);
    $node->insert(0);
    $node->insert(-5);
    $node->insert(3);

    $expected = $node->left->left->right;
    $actual = $node->contains(3);

    $this->assertEquals($expected, $actual);
});

test('Node can insert correctly', function () {
    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(20);
    $node->insert(0);
    $node->insert(-5);
    $node->insert(3);

    $this->assertNull($node->contains(3333));
});