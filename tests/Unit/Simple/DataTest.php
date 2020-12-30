<?php
declare(strict_types=1);

namespace Tests\Unit\Simple;


final class DataTest extends \PHPUnit\Framework\TestCase
{

    public function additionProvider(): array
    {
        return [
            [0, 1, 1, 2],
            [1, 0 , 1, 2],
            [1, 1, 1, 3],
//            [1, 1, 1, 4],
        ];
    }

    public function additionNamedProvider(): array
    {
        return [
            'adding zeros'  => [0, 0, 0],
            'zero plus one' => [0, 1, 1],
            'one plus zero' => [1, 0, 1],
            'one plus one'  => [1, 1, 3]
        ];
    }


    /**
     * @param int $a
     * @param int $b
     * @param int $c
     * @param int $expected
     * @dataProvider additionProvider
     */
    public function testAdd(int $a, int $b, int $c, int $expected)
    {
        $this->assertSame($expected, ($a + $b + $c));
    }


    /**
     * @param int $a
     * @param int $b
     * @param int $expected
     * @dataProvider additionNamedProvider
     */
    public function testAddWithNamedProvider(int $a, int $b, int $expected)
    {
        $this->assertSame($expected, $a + $b);
    }

}