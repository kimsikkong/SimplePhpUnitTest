<?php


namespace Tests\Unit\Simple;


use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{
    public function testPushAndPop(): void
    {
        $stack = [];
        $this->assertSame(0, count($stack));
        array_push($stack, 'foo');

        $this->assertSame('foo', $stack[count($stack) - 1]);
        $this->assertSame(1, count($stack));

        $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }

    public function testEmpty(): array
    {
        $stack = [];
        $this->assertEmpty($stack);
        return $stack;
    }

    /**
     * @depends testEmpty
     * @param array $stack
     * @return array
     */

    public function testPush(array $stack): array
    {
        array_push($stack, 'foo');
        $this->assertSame(1, count($stack));
        $this->assertNotEmpty($stack);
        return $stack;
    }

    /**
     * @depends testPush
     * @param array $stack
     */
    public function testPop(array $stack): void
    {
        $this->assertSame('foo', array_pop($stack));
        $this->assertEmpty($stack);
    }

}