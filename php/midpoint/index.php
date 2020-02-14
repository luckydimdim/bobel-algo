<?php declare(strict_types=1);

require_once dirname(__FILE__) .'/vendor/autoload.php';

use \bobel\linked_list\Node;
use \bobel\linked_list\LinkedList;

/**
 * Return the 'middle' node of a linked list.
 * If the list has an even number of elements, return
 * the node at the end of the first half of the list.
 * *Do not* use a counter variable, *do not* retrieve
 * the size of the list, and only iterate
 * through the list one time.
 *
 * @example
 *   $l = new LinkedList();
 *   $l->insertLast('a')
 *   $l->insertLast('b')
 *   $l->insertLast('c')
 *   midpoint($l); // returns Node { data: 'b' }
 *
 * @param $list LinkedList
 * @return Node
 */
function midpoint(LinkedList $list): Node {
    if (!$list->head) {
        return 0;
    }

    $slow = $list->getFirst();
    $fast = $list->getFirst();

    while ($fast->next && $fast->next->next) {
        $slow = $slow->next;
        $fast = $fast->next->next;
    }

    return $slow;
}
