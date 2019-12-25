<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class IndexTest extends TestCase
{
    public function testPalindromeFunctionExists(): void
    {
        $index = new Index();
        $this->assertTrue(method_exists($index, 'palindrome'));
    }

    public function testPalindromeWorks(): void
    {
        $this->assertTrue(Index::palindrome("abcba"));
    }

    public function testPalindromeNotWorks(): void
    {
        $this->assertFalse(Index::palindrome("11abcba"));
    }
}
