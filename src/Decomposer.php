<?php

/**
 * Class Decomposer
 */
class Decomposer implements DecomposerInterface
{
    /**
     * @inheritDoc
     */
    public function decompose(int $batchSize, int $totalCount, array $params = []): array
    {
        return [];
    }
}