<?php


namespace Tests\Unit\Simple;


use PHPUnit\Framework\TestCase;

final class StackTest extends TestCase
{

    private array $stack;

    protected function setUp(): void
    {
        parent::setUp();
        $this->stack = [];
    }

    public function testPushAndPop(): void
    {
        $this->assertSame(0, count($this->stack));
        array_push($this->stack, 'foo');

        $this->assertSame('foo', $this->stack[count($this->stack) - 1]);
        $this->assertSame(1, count($this->stack));

        $this->assertSame('foo', array_pop($this->stack));
        $this->assertSame(0, count($this->stack));
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