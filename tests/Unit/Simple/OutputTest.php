<?php
declare(strict_types=1);

namespace Tests\Unit\Simple;


class OutputTest extends \PHPUnit\Framework\TestCase
{
    public function testExpectFooActualFoo(): void
    {
        $this->expectOutputString('foo');
        echo 'foo';
    }

    public function testExpectBarActualBaz(): void
    {
        $this->expectOutputString('bar');
        echo 'baz';
    }

}