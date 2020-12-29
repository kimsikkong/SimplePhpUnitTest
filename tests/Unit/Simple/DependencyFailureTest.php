<?php


namespace Tests\Unit\Simple;


use PHPUnit\Framework\TestCase;

final class DependencyFailureTest extends TestCase
{

    public function testOne(): void
    {
        $this->assertTrue(false);
    }

    /**
     * @depends testOne
     */
    public function testTwo(): void
    {

    }

}