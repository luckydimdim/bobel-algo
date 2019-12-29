<?php

class IndexTest extends \Codeception\Test\Unit
{
    protected function _before()
    {
        require_once dirname(dirname(__FILE__)) .'/index.php';
    }

    public function testIfFizzBuzzExists()
    {
        $this->assertTrue(function_exists('fizzBuzz'));
    }

    public function testIfFizzBuzzWorksProperly()
    {
        $expexted = "1\n2\nfizz\n4\nbuzz";
        $actual = fizzBuzz(5);

        $this->assertEquals($expexted, $actual);
    }
}
