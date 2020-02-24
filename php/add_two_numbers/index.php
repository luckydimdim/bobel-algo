<?php declare(strict_types=1);

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) { $this->val = $val; }
}

/**
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2) {
    $result = '';
    $left = '';
    $right = '';

    while ($l1) {
        $left .= $l1->val;
        $l1 = $l1->next;
    }

    while ($l2) {
        $right .= $l2->val;
        $l2 = $l2->next;
    }

    $left = strrev($left);
    $right = strrev($right);

    $result = sum($left, $right);
    $result = strrev($result);
    $result = str_split($result);

    $tree = new ListNode(array_shift($result));
    $current = $tree;

    while ($result) {
        $node = new ListNode(array_shift($result));
        $current->next = $node;
        $current = $current->next;
    }

    return $tree;
}

function sum($left, $right) {
    $result = [];
    $left = str_split($left);
    $right = str_split($right);

    $memo = 0;
    $amount = 0;

    while ($left && $right) {
        $amount = array_pop($left) + array_pop($right) + $memo;

        if ($amount >= 10) {
            $amount = $amount - 10;
            $memo = 1;
        } else {
            $memo = 0;
        }

        array_unshift($result, $amount);
    }

    while ($left) {
        $amount = array_pop($left) + $memo;

        if ($amount >= 10) {
            $amount = $amount - 10;
            $memo = 1;
        } else {
            $memo = 0;
        }

        array_unshift($result, $amount);
    }

    while ($right) {
        $amount = array_pop($right) + $memo;

        if ($amount >= 10) {
            $amount = $amount - 10;
            $memo = 1;
        } else {
            $memo = 0;
        }

        array_unshift($result, $amount);
    }

    if ($memo) {
        array_unshift($result, $memo);
    }

    return implode($result);
}


