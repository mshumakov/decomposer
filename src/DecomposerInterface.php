<?php

namespace MSdev\Helper\Decomposer;

/**
 * Interface DecomposerInterface
 * @package MSdev\Helper\Decomposer
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