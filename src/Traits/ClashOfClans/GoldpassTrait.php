<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

/**
 * Access information about gold pass.
 *
 * Trait GoldpassTrait
 */
trait GoldpassTrait
{
    /**
     * Get information about the current gold pass season.
     *
     * @param string $format
     * @return array|string
     */
    public function getGoldpass(string $format = 'json')
    {
        return $this->request('goldpass/seasons/current', [], [], $format);
    }
}
