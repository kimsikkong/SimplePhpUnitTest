<?php


namespace Tests\Unit\Simple;


use PHPUnit\Framework\TestCase;

final class MultipleDependenciesTest extends TestCase
{

    public function testOne(): string
    {
        $this->assertTrue(true);
        return 'one';
    }

    public function testTwo(): string
    {
        $this->assertTrue(true);
        return 'two';
    }

    /**
     * @depends testOne
     * @depends testTwo
     * @param string $one
     * @param string $two
     */
    public function test(string $one, string $two): void
    {
        $this->assertSame('one', $one);
        $this->assertSame('two', $two);
    }

}