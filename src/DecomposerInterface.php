<?php

namespace Dev\Helper\Decomposer;

/**
 * Interface DecomposerInterface
 * @package Dev\Helper\Decomposer
 */
interface DecomposerInterface
{
    /**
     * @param int $batchSize
     * @param int $totalCount
     * @param array $params
     *
     * @return array
     */
    public static function decompose(int $batchSize, int $totalCount, array $params = []): array;
}