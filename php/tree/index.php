<?php

require_once dirname(__FILE__) . '/vendor/autoload.php';

use \bobel\tree\Node;
use \bobel\tree\Tree;


$tree = new Tree();
$tree->root = new Node('a');
$tree->root->add('b');
$tree->root->add('d');
$tree->root->children[0]->add('c');

$list = [$tree->root];

echo "0.\n";
print_r($list);
echo "\n\n";

if (count($list)) {
    $node = array_shift($list);
    //$list = [$node->children[0]] + [$node->children[1]] + $list;
    $list = array_merge($node->children, $list);
    echo "1.\n";
    print_r($list);
    echo "\n\n";
}

if (count($list)) {
    $node = array_shift($list);
    $list = $node->children + $list;
    echo "2.\n";
    print_r($list);
    echo "\n\n";
}

if (count($list)) {
    $node = array_shift($list);
    $list = $node->children + $list;
    echo "3.\n";
    print_r($list);
    echo "\n\n";
}

if (count($list)) {
    $node = array_shift($list);
    $list = $node->children + $list;
    echo "4.\n";
    print_r($list);
    echo "\n\n";
}