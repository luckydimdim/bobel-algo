<?php declare(strict_types=1);

namespace bobel\linked_list;

class Node
{
    public $date;
    public ?Node $next;

    public function __construct($data, Node $next = null)
    {
        $this->data = $data;
        $this->next = $next;
    }
}
