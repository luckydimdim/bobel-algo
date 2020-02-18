<?php declare(strict_types=1);

namespace bobel\tree;

class Node
{
    public string $data = '';
    public array $children = [];

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function add(string $data): void
    {
        $node = new Node($data);
        $this->children[] = $node;
    }

    public function remove(string $data): void
    {
        $index = array_search($data, array_column($this->children, 'data'));

        if ($index === false) {
            return;
        }

        unset($this->children[$index]);
    }
}
