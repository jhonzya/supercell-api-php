<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 * Trait TournamentsTrait.
 */
trait GlobalTournamentsTrait
{
    /**
     * Get list of global tournaments.
     *
     * @param string $format
     * @return array|string
     */
    public function getGlobalTournaments(string $format = 'json')
    {
        return $this->request('globaltournaments', [], [], $format);
    }
}
