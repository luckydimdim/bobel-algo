<?php declare(strict_types=1);

/**
 * Create a queue data structure.  The queue
 * should be a class with methods 'add' and 'remove'.
 * Adding to the queue should store an element until
 * it is removed
 *
 * @example
 * const q = new Queue();
 * q.add(1);
 * q.remove(); // returns 1;
 */
class Queue 
{
    private $data = [];

    public function add(int $element): void
    {
        array_unshift($this->data, $element);
    }

    public function remove(): int
    {
        return array_pop($this->data);
    }
}