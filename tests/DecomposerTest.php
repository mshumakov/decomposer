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
    public function testSmallDecomposeData(): void
    {
        $decomposeResult = Decomposer::decompose(20, 100);
        $this->assertEquals([], $decomposeResult);
    }
}