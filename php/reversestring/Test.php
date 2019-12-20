<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testRevertFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'reverse'));
    }

    public function testFunctionReversesString(): void
    {
        $this->assertEquals(Index::reverse('abcd'), 'dcba');
    }

    public function testFunctionReversesStringWithWhitespaces(): void
    {
        $this->assertEquals(Index::reverse('  abcd'), 'dcba  ');
    }
}
