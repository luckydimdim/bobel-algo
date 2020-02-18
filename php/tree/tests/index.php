<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\tree\Node;
use \bobel\tree\Tree;

test('Node exists', function () {
	assertTrue(class_exists('\bobel\tree\Node'));
});

test('Tree exists', function () {
    assertTrue(class_exists('\bobel\tree\Tree'));
});

test('Node has a data and children properties', function () {
    $node = new Node('a');
    $this->assertEquals('a', $node->data);
    $this->assertEquals(0, count($node->children));
});

test('Node can add children', function () {
    $node = new Node('a');
    $node->add('b');

    $this->assertEquals(1, count($node->children));
    $this->assertEquals([], $node->children[0]->children);
});

test('Node can remove children', function () {
    $node = new Node('a');
    $node->add('b');

    $this->assertEquals(1, count($node->children));
    $node->remove('b');
    $this->assertEquals(0, count($node->children));
});

test('Tree starts empty', function () {
    $tree = new Tree();
    $this->assertEquals(null, $tree->root);
});

test('Tree can traverse BF', function () {
    $letters = [];

    $tree = new Tree();
    $tree->root = new Node('a');
    $tree->root->add('b');
    $tree->root->add('c');
    $tree->root->children[0]->add('d');

    $tree->traverseBF(function ($node) use (&$letters) {
        array_push($letters, $node->data);
    });

    $this->assertEquals(['a', 'b', 'c', 'd'], $letters);
});

test('Tree can traverse DF', function () {
    $letters = [];

    $tree = new Tree();
    $tree->root = new Node('a');
    $tree->root->add('b');
    $tree->root->add('d');
    $tree->root->children[0]->add('c');

    $tree->traverseDF(function ($node) use (&$letters) {
        $letters[] = $node->data;
    });

    $this->assertEquals(['a', 'b', 'c', 'd'], $letters);
});
