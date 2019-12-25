<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testMergeSortFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'mergeSort'));
    }

    public function testMergeReturnsProperArray(): void
    {
        $this->assertEquals(Index::merge([4,5], [2,3,3]), [2,3,3,4,5]);
    }

    public function testMergeSortArrangesUnsortedArray(): void
    {
        $array = [5,3,1,4,2];
        $this->assertEquals(Index::mergeSort($array), [1,2,3,4,5]);
    }

    public function testMergeSortArrangesSortedArray(): void
    {
        $array = [1,2,3,4,5];
        $this->assertEquals(Index::mergeSort($array), [1,2,3,4,5]);
    }
}
