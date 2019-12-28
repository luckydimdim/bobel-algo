<?php

require_once dirname(dirname(__FILE__)) .'/index.php';

class IndexTest extends \Codeception\Test\Unit
{
    public function testMaxCharExists()
    {
        $this->assertTrue(function_exists('maxChar'));
    }

    public function testMaxCharFindsTheMostFrequentlyUsedChar()
    {
        $this->assertEquals(maxChar('a'), 'a');
        $this->assertEquals(maxChar('abcdefghijklmnaaaaa'), 'a');
    }

    public function testMaxCharWorksWithNumbersInTheString()
    {
        $this->assertEquals(maxChar('ab1c1d1e1f1g1'), 1);
    }
}