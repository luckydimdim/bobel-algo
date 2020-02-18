<?php

require_once dirname(dirname(__FILE__)) . '/vendor/autoload.php';

use \bobel\level_width\Node;

test('LevelWidth is a function', function () {
	assertTrue(function_exists('levelWidth'));
});

test('LevelWidth returns number of nodes at widest point', function () {
    $root = new Node(0);
    $root->add(1);
    $root->add(2);
    $root->add(3);
    $root->children[0]->add(4);
    $root->children[2]->add(5);

    $expected = [1, 3, 2];
    $actual = levelWidth($root);

    assertEquals($expected, $actual);
});

test('LevelWidth returns number of nodes at widest point 2', function () {
    $root = new Node(0);
    $root->add(1);
    $root->children[0]->add(2);
    $root->children[0]->add(3);
    $root->children[0]->children[0]->add(4);

    $expected = [1, 1, 2, 1];
    $actual = levelWidth($root);

    assertEquals($expected, $actual);
});
