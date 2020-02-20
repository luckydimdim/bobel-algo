<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\validate\Node;

test('Validate recognizes a valid BST', function () {
    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(0);
    $node->insert(20);

    assertTrue(validate($node));
});

test('Validate recognizes an invalid BST', function () {
    $node = new Node(10);
    $node->insert(5);
    $node->insert(15);
    $node->insert(0);
    $node->insert(20);
    $node->left->left->right = new Node(999);

    assertFalse(validate($node));
});
