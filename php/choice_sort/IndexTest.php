<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testChoiceSortFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'choiceSort'));
    }

    public function testChoiceSortArrangesUnsortedArray(): void
    {
        $array = [5,3,1,4,2];
        $this->assertEquals(Index::choiceSort($array), [1,2,3,4,5]);
    }

    public function testChoiceSortArrangesSortedArray(): void
    {
        $array = [1,2,3,4,5];
        $this->assertEquals(Index::choiceSort($array), [1,2,3,4,5]);
    }
}
