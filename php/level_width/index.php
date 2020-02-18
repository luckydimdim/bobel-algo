<?php declare(strict_types=1);

require_once dirname(__FILE__) . '/vendor/autoload.php';

use \bobel\level_width\Node;

/**
 * --- Directions
 * Given the root node of a tree, return
 * an array where each element is the width
 * of the tree at each level.
 *
 * @example
 * Given:
 *     0
 *   / |  \
 *  1  2   3
 *  |      |
 *  4      5
 * Answer: [1, 3, 2]
 */
function levelWidth(Node $root): array {
    $result = [];
    $counter = 0;
    $list = [$root, 'stop'];

    while (count($list)) {
        $node = array_shift($list);

        if ($node === 'stop') {
            if ($counter === 0) {
                return $result;
            }

            $result[] = $counter;
            $list[] = $node;
            $counter = 0;
        } else {
            $counter++;
            array_push($list, ...$node->children);
        }
    }

    return $result;
}
