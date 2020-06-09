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
    public function decompose(int $batchSize, int $totalCount, array $parameters = []): array
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

        $data = $parameters ?: [];
        $offset = 0;

        foreach ($batchSizesSet as $limit) {
            $data['list'][] = [
                'offset' => $offset,
                'limit'  => $limit,
            ];

            $offset += $batchSize;
        }

        return $data;
    }
}