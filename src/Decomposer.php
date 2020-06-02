<?php

namespace Dev\Helper\Decomposer;

/**
 * Class Decomposer
 * @package Dev\Helper\Decomposer
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