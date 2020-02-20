<?php declare(strict_types=1);

namespace bobel\validate;

/**
 * --- Directions
 * 1) Implement the Node class to create
 * a binary search tree.  The constructor
 * should initialize values 'data', 'left',
 * and 'right'.
 * 2) Implement the 'insert' method for the
 * Node class.  Insert should accept an argument
 * 'data', then create an insert a new node
 * at the appropriate location in the tree.
 * 3) Implement the 'contains' method for the Node
 * class.  Contains should accept a 'data' argument
 * and return the Node in the tree with the same value.
 */
class Node
{
    public int $data;
    public ?Node $left = null;
    public ?Node $right = null;

    public function __construct(int $data)
    {
        $this->data = $data;
    }

    public function insert(int $data): void
    {
        if ($data < $this->data) {
            if ($this->left) {
                $this->left->insert($data);
            } else {
                $this->left = new Node($data);
            }
        } else {
            if ($this->right) {
                $this->right->insert($data);
            } else {
                $this->right = new Node($data);
            }
        }
    }

    public function contains(int $data): ?Node
    {
        if ($data === $this->data) {
            return $this;
        }

        if ($data < $this->data) {
            if ($this->left) {
                return $this->left->contains($data);
            }
        } else {
            if ($this->right) {
                return $this->right->contains($data);
            }
        }

        return null;
    }
}
