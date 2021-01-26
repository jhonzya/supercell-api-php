<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

/**
 * Trait LabelsTrait.
 */
trait LabelsTrait
{
    /**
     * List player labels.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPlayerLabels(array $query = [], string $format = 'json')
    {
        return $this->request('labels/players', $query, [], $format);
    }

    /**
     * List clan labels.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanLabels(array $query = [], string $format = 'json')
    {
        return $this->request('labels/clans', $query, [], $format);
    }
}
