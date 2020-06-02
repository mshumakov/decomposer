<?php

/**
 * Interface DecomposerInterface
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
    public function decompose(int $batchSize, int $totalCount, array $params = []): array;
}