<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 * Access global and local rankings
 *
 * Trait LocationsTrait
 * @package Jhonzya\SupercellApi\Traits\ClashRoyale
 */
trait LocationsTrait
{
    /**
     * Get clan rankings for a specific location.
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("locations/{$locationId}/rankings/clans", $query, [], $format);
    }

    /**
     * Get player rankings for a specific location.
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPlayerRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("locations/{$locationId}/rankings/players", $query, [], $format);
    }

    /**
     * Get clan war rankings for a specific location.
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanWarRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("locations/{$locationId}/rankings/clanwars", $query, [], $format);
    }

    /**
     * Get top player league season.
     *
     * @param $seasonId
     * @param string $format
     * @return array|string
     */
    public function getTopPlayerLeagueSeason($seasonId, string $format = 'json')
    {
        return $this->request("locations/global/seasons/{$seasonId}", [], [], $format);
    }

    /**
     * Get top player rankings for a season.
     *
     * @param $seasonId
     * @param string $format
     * @return array|string
     */
    public function getTopPlayerRankingsLeagueSeason($seasonId, string $format = 'json')
    {
        return $this->request("locations/global/seasons/{$seasonId}/rankings/players", [], [], $format);
    }

    /**
     * Lists top player league seasons.
     *
     * @param string $format
     * @return array|string
     */
    public function getTopPlayersLeagueSeason(string $format = 'json')
    {
        return $this->request("locations/global/seasons", [], [], $format);
    }

    /**
     * List locations.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getLocations(array $query = [], string $format = 'json')
    {
        return $this->request("locations", $query, [], $format);
    }

    /**
     * Get information about specific location
     *
     * @param $locationId
     * @param string $format
     * @return array|string
     */
    public function getLocation($locationId, string $format = 'json')
    {
        return $this->request("locations/{$locationId}", [], [], $format);
    }

    /**
     * Get global tournament rankings
     *
     * @param $tournamentTag
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getGlobalTournamentRankings($tournamentTag, array $query = [], string $format = 'json')
    {
        return $this->request("locations/global/rankings/tournaments/{$tournamentTag}", $query, [], $format);
    }
}
