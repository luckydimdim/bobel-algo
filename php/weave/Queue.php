<?php declare(strict_types=1);

/** --- Directions
 * Implement a 'peek' method in this Queue class.
 * Peek should return the last element (the next
 * one to be returned) from the queue *without*
 * removing it.
 */
class Queue
{
    private $data = [];

    public function __construct()
    {
        $this->data = [];
    }

    public function add(string $value): void 
    {
        array_unshift($this->data, $value);
    }

    public function remove(): string
    {
        return array_pop($this->data);
    }

    public function peek(): ?string
    {
        $result = isset($this->data[count($this->data) - 1]) ? $this->data[count($this->data) - 1] : null;

        return $result;
    }
}