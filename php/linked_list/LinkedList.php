<?php declare(strict_types=1);

namespace bobel\linked_list;

class LinkedList
{
    public ?Node $head = null;

    public function insertFirst($data)
    {
        if (!$this->head) {
            $this->head = new Node($data);

            return;
        }

        $this->head = new Node($data, $this->head);
    }
}