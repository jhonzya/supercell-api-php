<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 * Access tournament information
 *
 * Trait TournamentsTrait
 * @package Jhonzya\SupercellApi\Traits\ClashRoyale
 */
trait TournamentsTrait
{
    /**
     * Search all tournaments by name. It is not possible to specify ordering for results so clients should not
     * rely on any specific ordering as that may change in the future releases of the API.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getTournaments(array $query = [], string $format = 'json')
    {
        return $this->request("tournaments", $query, [], $format);
    }

    /**
     * Get information about a single tournament by a tournament tag.
     *
     * @param $tournamentTag
     * @param string $format
     * @return array|string
     */
    public function getTournament($tournamentTag, string $format = 'json')
    {
        return $this->request("tournaments/{$tournamentTag}", [], [], $format);
    }
}
