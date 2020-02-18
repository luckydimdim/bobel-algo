<?php declare(strict_types=1);

namespace bobel\tree;

class Tree
{
    public ?Node $root = null;

    public function traverseBF(callable $fn): void
    {
        $list = [$this->root];

        while (count($list)) {
            $node = array_shift($list);
            array_push($list, ...$node->children);

            $fn($node);
        }
    }

    public function traverseDF(callable $fn): void
    {
        $list = [$this->root];

        while (count($list)) {
            $node = array_shift($list);
            $list = array_merge($node->children, $list);

            $fn($node);
        }
    }
}
