<?php declare(strict_types=1);

namespace bobel\linked_list;

/**
 * Create a class to represent a linked list.
 * When created, a linked list should have *no* head node
 * associated with it. The LinkedList instance will have
 * one property, 'head', which is a reference to the first node
 * of the linked list. By default 'head' should be 'null'.
 */
class LinkedList
{
    public ?Node $head = null;

    /**
     * Creates a new Node from argument 'data'
     * and assigns the resulting node to the 'head' property.
     * Make sure to handle the case in which the linked list
     * already has a node assigned to the 'head' property.
     *
     * @param mixed $data
     * @return void
     */
    public function insertFirst($data) : void
    {
        if (!$this->head) {
            $this->head = new Node($data);

            return;
        }

        $this->head = new Node($data, $this->head);
    }

    /**
     * Returns the number of nodes in the linked list.
     *
     * @return int number of nodes in the linked list
     */
    public function size() : int
    {
        $counter = 0;
        $node = $this->head;

        if (!$node) {
            return $counter;
        }

        while ($node) {
            $counter++;
            $node = $node->next;
        }

        return $counter;
    }

    /**
     * Returns the first node of the linked list.
     *
     * @return Node first node
     */
    public function getFirst() : Node
    {
        return $this->head;
    }

    /**
     * Returns the last node of the linked list.
     *
     * @return Node last node
     */
    public function getLast() : Node
    {
        $node = $this->head;

        if (!$node) {
            return null;
        }

        while ($node->next) {
            $node = $node->next;
        }

        return $node;
    }

    /**
     * Empties the linked list of any nodes.
     */
    public function clear() : void
    {
        $this->head = null;
    }

    /**
     * Removes only the first node of the linked list.
     * The list's head should now be the second element.
     */
    public function removeFirst() : void
    {
        if (!$this->head) {
            return;
        }

        $this->head = $this->head->next;
    }

    /**
     * Removes the last node of the chain.
     */
    public function removeLast() : void
    {
        if (!$this->head) {
            return;
        }

        if (!$this->head->next) {
            $this->head = null;

            return;
        }

        $previous = $this->head;
        $current = $this->head->next;

        while ($current->next) {
            $previous = $current;
            $current = $current->next;
        }

        $previous->next = null;
    }

    /**
     * Inserts a new node with provided data at the end of the chain
     *
     * @param $data mixed
     */
    public function insertLast($data) : void
    {
        if (!$this->head) {
            $this->head = new Node($data);

            return;
        }

        $node = $this->getLast();
        $node->next = new Node($data);
    }

    /**
     * Returns the node at the provided index
     *
     * @param $index int number of node
     * @return ?Node node at particulat index
     */
    public function getAt(int $index) : ?Node
    {
        $counter = 0;
        $node = $this->head;

        if (!$node) {
            return null;
        }

        while ($node) {
            if ($counter === $index) {
                return $node;
            }

            $node = $node->next;
            $counter++;
        }

        return null;
    }

    /**
     * Removes node at the provided index
     *
     * @param $index int number of node to remove
     */
    public function removeAt(int $index) : void
    {
        if (!$this->head) {
            return;
        }

        $previous = $this->getAt($index - 1);
        $next = $this->getAt($index + 1);

        if (!$previous) {
            return;
        }

        $previous->next = $next;
    }

    /**
     * Create an insert a new node at provided index.
     * If index is out of bounds, add the node to the end of the list.
     *
     * @param $data mixed
     * @param $index int number of node
     */
    public function insertAt($data, int $index) : void
    {
        if ($index < 0) {
            return;
        }

        if ($index === 0) {
            if (!$this->head) {
                $this->head = new Node($data);
            } else {
                $this->head = new Node($data, $this->head);
            }

            return;
        }

        $node = $this->getAt($index - 1);

        if (!$node) {
            $node = $this->getLast();
        }

        $node->next = new Node($data, $node->next);
    }

    /**
     * Calls the provided function with every node of the chain.
     *
     * @param $fn callable
     */
    public function forEach(callable $fn) : void
    {
        if (!$this->head) {
            return;
        }

        $node = $this->head;

        while ($node) {
            $fn($node);
            $node = $node->next;
        }
    }

    /**
     * Iterator
     *
     * @return ?Node
     */
    public function iterateNodes() : \Generator
    {
        if (!$this->head) {
            return yield;
        }

        $node = $this->head;

        while ($node) {
            yield $node;

            $node = $node->next;
        }
    }
}






