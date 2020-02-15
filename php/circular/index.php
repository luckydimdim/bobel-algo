<?php declare(strict_types=1);

require_once dirname(__FILE__) .'/vendor/autoload.php';

use \bobel\linked_list\Node;
use \bobel\linked_list\LinkedList;

/**
 * --- Directions
 * Given a linked list, return true if the list
 * is circular, false if it is not.
 *
 * @example
 *   $l = new LinkedList();
 *   $a = new Node('a');
 *   $b = new Node('b');
 *   $c = new Node('c');
 *   $l.head = $a;
 *   $a.next = $b;
 *   $b.next = $c;
 *   $c.next = $b;
 *   circular($l) // true
 * @param LinkedList $list
 * @return bool
 */
function circular(LinkedList $list): bool {
    $slow = $list->getFirst();
    $fast = $list->getFirst();

    while ($fast->next && $fast->next->next) {
        $slow = $slow->next;
        $fast = $fast->next->next;

        if ($slow === $fast) {
            return true;
        }
    }

    return false;
}
