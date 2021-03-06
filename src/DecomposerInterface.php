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
     * @param array $parameters
     *
     * @return array
     */
    public function decompose(int $batchSize, int $totalCount, array $parameters = []): array;
}