<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testBubbleSortFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'bubbleSort'));
    }

    public function testBubbleSortArrangesUnsortedArray(): void
    {
        $array = [5,3,1,4,2];
        $this->assertEquals(Index::bubbleSort($array), [1,2,3,4,5]);
    }

    public function testBubbleSortArrangesSortedArray(): void
    {
        $array = [1,2,3,4,5];
        $this->assertEquals(Index::bubbleSort($array), [1,2,3,4,5]);
    }
}
