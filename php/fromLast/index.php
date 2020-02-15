<?php declare(strict_types=1);

require_once dirname(__FILE__) .'/vendor/autoload.php';

use \bobel\linked_list\Node;
use \bobel\linked_list\LinkedList;

/**
 * Given a linked list, return the element n spaces
 * from the last node in the list.  Do not call the 'size'
 * method of the linked list.  Assume that n will always
 * be less than the length of the list.
 *
 * @example
 *    $list = new LinkedList();
 *    $list->insertLast('a');
 *    $list->insertLast('b');
 *    $list->insertLast('c');
 *    $list->insertLast('d');
 *    fromLast($list, 2)->data // 'b'
 *
 * @param LinkedList $list
 * @param int $n
 * @return Node
 */
function fromLast(LinkedList $list, int $n): Node {
    $slow = $list->getFirst();
    $fast = $list->getAt($n);

    while ($fast->next) {
        $slow = $slow->next;
        $fast = $fast->next;
    }

    return $slow;
}
