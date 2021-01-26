<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 *
 *
 * Trait TournamentsTrait
 * @package Jhonzya\SupercellApi\Traits\ClashRoyale
 */
trait GlobalTournamentsTrait
{
    /**
     * Get list of global tournaments
     *
     * @param string $format
     * @return array|string
     */
    public function getGlobalTournaments(string $format = 'json')
    {
        return $this->request("globaltournaments", [], [], $format);
    }
}
