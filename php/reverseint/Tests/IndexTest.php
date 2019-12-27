<?php

require dirname(dirname(__FILE__)) .'/Index.php';

class IndexTest extends \Codeception\Test\Unit
{
    /**
     * @var \Tests\UnitTester
     */
    protected $tester;

    public function testReverseIntFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'reverseInt'));
    }

    public function testReverseIntHandles0AsAnInput(): void
    {
        $this->assertEquals(Index::reverseInt(0), 0);
    }

    public function testReverseIntFlipsAPositiveNumber(): void
    {
        $this->assertEquals(Index::reverseInt(5), 5);
        $this->assertEquals(Index::reverseInt(15), 51);
        $this->assertEquals(Index::reverseInt(90), 9);
        $this->assertEquals(Index::reverseInt(2359), 9532);
    }

    public function testReverseIntFlipsANegativeNumber(): void
    {
        $this->assertEquals(Index::reverseInt(-5), -5);
        $this->assertEquals(Index::reverseInt(-15), -51);
        $this->assertEquals(Index::reverseInt(-90), -9);
        $this->assertEquals(Index::reverseInt(-2359), -9532);
    }
}
