<?php declare(strict_types=1);

/**
 * --- Directions
 * Implement a Queue datastructure using two stacks.
 * *Do not* create an array inside of the 'Queue' class.
 * Queue should implement the methods 'add', 'remove', and 'peek'.
 * For a reminder on what each method does, look back
 * at the Queue exercise.
 *
 * @example
 *     $q = new Queue();
 *     $q.add(1);
 *     $q.add(2);
 *     $q.peek();   // returns 1
 *     $q.remove(); // returns 1
 *     $q.remove(); // returns 2
 */
class Queue
{
    private $left;
    private $right;

    public function __construct()
    {
        $this->left = new Stack();
        $this->right = new Stack();
    }

    public function add(int $element): void
    {
        while ($this->right->peek() !== null) {
            $this->left->push($this->right->pop());
        }

        $this->left->push($element);
    }

    public function remove(): ?int
    {
        while ($this->left->peek() !== null) {
            $this->right->push($this->left->pop());
        }

        return $this->right->pop();
    }

    public function peek(): ?int
    {
        while ($this->left->peek() !== null) {
            $this->right->push($this->left->pop());
        }

        return $this->right->peek();
    }
}