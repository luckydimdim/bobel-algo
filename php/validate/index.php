<?php declare(strict_types=1);

require_once dirname(__FILE__) .'/vendor/autoload.php';

use \bobel\validate\Node;

/**
 * --- Directions
 * Given a node, validate the binary search tree,
 * ensuring that every node's left hand child is
 * less than the parent node's value, and that
 * every node's right hand child is greater than
 * the parent
 *
 * @param Node $node
 * @param ?int $min
 * @param ?int $max
 * @return bool
 */
function validate(Node $node, ?int $min = null, ?int $max = null): bool {
    if (!is_null($min) && $node->data < $min) {
        return false;
    }

    if (!is_null($max) && $node->data > $max) {
        return false;
    }

    if ($node->left) {
        if (!validate($node->left, $min, $node->data)) {
            return false;
        }
    }

    if ($node->right) {
        if (!validate($node->right, $node->data, $max)) {
            return false;
        }
    }

    return true;
}
