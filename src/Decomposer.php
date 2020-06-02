<?php

namespace MShumakov\Helper\Decomposer;

/**
 * Class Decomposer
 * @package MShumakov\Helper\Decomposer
 */
class Decomposer implements DecomposerInterface
{
    /**
     * @inheritDoc
     */
    public static function decompose(int $batchSize, int $totalCount, array $params = []): array
    {
        return [];
    }
}