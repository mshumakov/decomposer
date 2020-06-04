<?php

namespace MShumakov\Helper\Decomposer;

/**
 * Interface DecomposerInterface
 * @package MShumakov\Helper\Decomposer
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