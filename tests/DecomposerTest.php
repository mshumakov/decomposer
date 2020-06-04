<?php

namespace Test\MSdev\Helper\Decomposer;

use MSdev\Helper\Decomposer\Decomposer;
use PHPUnit\Framework\TestCase;
use TypeError;

/**
 * Class DecomposerTest
 * @package Test\MSdev\Helper\Decomposer
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
     * @param $excepted
     *
     * @dataProvider getGoodData
     */
    public function testGoodDecompose($batchSize, $totalCount, $excepted): void
    {
        $actual = Decomposer::decompose($batchSize, $totalCount);
        $this->assertEquals($excepted, $actual);
    }

    /**
     * @param $batchSize
     * @param $totalCount
     *
     * @dataProvider getTypeErrorData
     */
    public function testTypeErrorDecompose($batchSize, $totalCount): void
    {
        $this->expectException(TypeError::class);
        Decomposer::decompose($batchSize, $totalCount);
    }

    /**
     * @return array
     */
    public function getGoodData(): array
    {
        return [
            [
                1,
                0,
                []
            ],
            [
                1,
                1,
                [
                    [
                        'offset' => 0,
                        'limit'  => 1
                    ]
                ]
            ],
            [
                5,
                10,
                [
                    [
                        'offset' => 0,
                        'limit'  => 5
                    ],
                    [
                        'offset' => 5,
                        'limit'  => 5
                    ]
                ]
            ],
            [
                13,
                37,
                [
                    [
                        'offset' => 0,
                        'limit'  => 13
                    ],
                    [
                        'offset' => 13,
                        'limit'  => 13
                    ],
                    [
                        'offset' => 26,
                        'limit'  => 11
                    ]
                ]
            ],
        ];
    }

    /**
     * @return array
     */
    public function getTypeErrorData(): array
    {
        return [
            [
                '',
                'hello world',
            ],
            [
                null,
                null,
            ],
        ];
    }
}