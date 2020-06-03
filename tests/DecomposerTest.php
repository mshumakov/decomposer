<?php

namespace Test\MShumakov\Helper\Decomposer;

use MShumakov\Helper\Decomposer\Decomposer;
use PHPUnit\Framework\TestCase;

/**
 * Class DecomposerTest
 * @package Test\MShumakov\Helper\Decomposer
 */
class DecomposerTest extends TestCase
{
    public function testEmptyDecompose(): void
    {
        $expected = [];
        $actual = Decomposer::decompose(0, 0);

        $this->assertEquals($expected, $actual);
    }

    /**
     * @param $batchSize
     * @param $totalCount
     *
     * @dataProvider getData
     */
    public function testGoodDecompose($batchSize, $totalCount): void
    {
        $this->assertEquals([
            [
                'offset' => 0,
                'limit'  => 1,
            ],
            [
                'offset' => 5,
                'limit'  => 5,
            ],
            [
                'offset' => 26,
                'limit'  => 13,
            ],
        ], Decomposer::decompose($batchSize, $totalCount));
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            [1, 1],
            [5, 10],
            [13, 37],
        ];
    }
}