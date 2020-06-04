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
        if (!$batchSize || !$totalCount) {
            return [];
        }

        $batchSizesSet = [];
        if ($totalCount > $batchSize) {
            $numberOfBatches = (int)ceil($totalCount / $batchSize);
            for ($i = 1; $i <= $numberOfBatches; $i++) {
                $batchSizesSet[] = ($i !== $numberOfBatches)
                    ? $batchSize
                    : ($totalCount - array_sum($batchSizesSet));
            }
        } else {
            $batchSizesSet[] = $totalCount;
        }

        $data = [];
        $offset = 0;

        if ($params) {
            $data[] = $params;
        }

        foreach ($batchSizesSet as $limit) {
            $data[] = [
                'offset' => $offset,
                'limit'  => $limit,
            ];

            $offset += $batchSize;
        }

        return $data;
    }
}