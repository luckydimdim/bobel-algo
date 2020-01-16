<?php declare(strict_types=1);

require_once dirname(__FILE__) . '/vendor/autoload.php';

/** 
 * --- Directions
 * 1) Complete the task in weave/queue.js
 * 2) Implement the 'weave' function.  Weave
 * receives two queues as arguments and combines the
 * contents of each into a new, third queue.
 * The third queue should contain the *alterating* content
 * of the two queues.  The function should handle
 * queues of different lengths without inserting
 * 'undefined' into the new one.
 * *Do not* access the array inside of any queue, only
 * use the 'add', 'remove', and 'peek' functions.
 *
 * @example
 *    const queueOne = new Queue();
 *    queueOne.add(1);
 *    queueOne.add(2);
 *    const queueTwo = new Queue();
 *    queueTwo.add('Hi');
 *    queueTwo.add('There');
 *    const q = weave(queueOne, queueTwo);
 *    q.remove() // 1
 *    q.remove() // 'Hi'
 *    q.remove() // 2
 *    q.remove() // 'There'
 * @param Queue $sourceOne first queue
 * @param Queue $sourceTwo second queue
 * @return Queue merged queues
 */
function weave(Queue $sourceOne, Queue $sourceTwo): Queue {
    $result = new Queue();

    while ($sourceOne->peek() !== null && $sourceTwo->peek() !== null) {
        if ($sourceOne->peek() !== null) {
            $result->add($sourceOne->remove());
        }
        
        if ($sourceTwo->peek() !== null) {
            $result->add($sourceTwo->remove());
        }
    }

    return $result;
}
