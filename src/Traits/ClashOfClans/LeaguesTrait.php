<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

/**
 * Access league information
 *
 * Trait LeaguesTrait
 * @package Jhonzya\SupercellApi\Traits\ClashOfClans
 */
trait LeaguesTrait
{
    /**
     * Get league information.
     *
     * @param $leagueId
     * @param string $format
     * @return array|string
     */
    public function getLeague($leagueId, string $format = 'json')
    {
        return $this->request("/leagues/{$leagueId}", [], [], $format);
    }

    /**
     * List leagues.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getLeagues(array $query = [], string $format = 'json')
    {
        return $this->request("/leagues", $query, [], $format);
    }

    /**
     * Get league seasons. Note that league season information is available only for Legend League.
     *
     * @param $leagueId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getLeagueSeasons($leagueId, array $query = [], string $format = 'json')
    {
        return $this->request("/leagues/{$leagueId}/seasons", $query, [], $format);
    }

    /**
     * Get war league information.
     *
     * @param $leagueId
     * @param string $format
     * @return array|string
     */
    public function getWarLeague($leagueId, string $format = 'json')
    {
        return $this->request("/warleagues/{$leagueId}", [], [], $format);
    }

    /**
     * Get league season rankings. Note that league season information is available only for Legend League.
     *
     * @param $leagueId
     * @param $seasonId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getLeagueSeasonRankings($leagueId, $seasonId, array $query = [], string $format = 'json')
    {
        return $this->request("/leagues/{$leagueId}/seasons/{$seasonId}", $query, [], $format);
    }

    /**
     * List war leagues.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getWarLeagues(array $query = [], string $format = 'json')
    {
        return $this->request("/warleagues", $query, [], $format);
    }
}
