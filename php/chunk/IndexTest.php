<?php 

class IndexTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
    	require_once dirname(__FILE__) ."/index.php";
    }

    public function testChunkExists()
    {
    	$this->assertTrue(function_exists("chunk"));
    }

    public function testChunkDividesAnArrayOf10ElementsWithChunkSize2()
    {
        $expected = [[1, 2], [3, 4], [5, 6], [7, 8], [9, 10]];
        $actual = chunk([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 2);

        $this->assertEquals($expected, $actual);
    }

    public function testChunkDividesAnArrayOf3ElementsWithChunkSize1()
    {
        $expected = [[1], [2], [3]];
        $actual = chunk([1, 2, 3], 1);

        $this->assertEquals($expected, $actual);
    }

    public function testChunkDividesAnArrayOf5ElementsWithChunkSize3()
    {
        $expected = [[1, 2, 3], [4, 5]];
        $actual = chunk([1, 2, 3, 4, 5], 3);

        $this->assertEquals($expected, $actual);
    }

    public function testChunkDividesAnArrayOf13ElementsWithChunkSize5()
    {
        $expected = [[1, 2, 3, 4, 5], [6, 7, 8, 9, 10], [11, 12, 13]];
        $actual = chunk([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13], 5);

        $this->assertEquals($expected, $actual);
    }
}
