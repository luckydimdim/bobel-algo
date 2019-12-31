<?php 

class IndexTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
        require_once dirname(__FILE__) .'/index.php';
    }

    public function testAnagramsFunctionExists()
    {
        $this->assertTrue(function_exists('anagrams'));
    }

    public function testHelloIsAnAnagramOfLlohe()
    {
        $this->assertTrue(anagrams('hello', 'llohe'));
    }

    public function testWhoaHiIsAnAnagramOfHiWhoa()
    {
        $this->assertTrue(anagrams('Whoa! Hi!', 'Hi! Whoa!'));
    }

    public function testOneOneIsNotAnAnagramOfTwoTwoTwo()
    {
        $this->assertFalse(anagrams('One One', 'Two two two'));
    }

    public function testOneOneIsNotAnAnagramOfOneOneC()
    {
        $this->assertFalse(anagrams('One one', 'One one c'));
    }

    public function testATreeALifeABenchIsNotAnAnagramOfATreeAFenceAYard()
    {
        $this->assertFalse(anagrams('A tree, a life, a bench', 'A tree, a fence, a yard'));
    }
}