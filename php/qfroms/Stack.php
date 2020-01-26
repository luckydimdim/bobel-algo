<?php declare(strict_types=1);

/**
 *
 * Create a stack data structure.  The stack
 * should be a class with methods 'push', 'pop', and
 * 'peek'.  Adding an element to the stack should
 * store it until it is removed.
 *
 * @example
 * $s = new Stack();
 * s.push(1);
 * s.push(2);
 * s.pop(); // returns 2
 * s.pop(); // returns 1
 */
class Stack
{
    private $data = null;

    public function __construct()
    {
        $this->data = [];
    }

    public function push(int $value): void
    {
        $this->data[] = $value;
    }

    public function pop(): ?int
    {
        return array_pop($this->data);
    }

    public function peek(): ?int
    {
        $result = null;

        if (count($this->data) > 0) {
            $result = $this->data[count($this->data) - 1];
        }

        return $result;
    }
}