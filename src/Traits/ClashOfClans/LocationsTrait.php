<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

/**
 * Get clan versus rankings for a specific location
 *
 * Trait LocationsTrait
 * @package Jhonzya\SupercellApi\Traits\ClashOfClans
 */
trait LocationsTrait
{
    /**
     * Get player versus rankings for a specific location.
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPlayerVersusRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("/locations/{$locationId}/rankings/players-versus", $query, [], $format);
    }

    /**
     * Get clan rankings for a specific location
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("/locations/{$locationId}/rankings/clans", $query, [], $format);
    }

    /**
     * Get player rankings for a specific location
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPlayerRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("/locations/{$locationId}/rankings/players", $query, [], $format);
    }

    /**
     * List locations
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getLocations(array $query = [], string $format = 'json')
    {
        return $this->request("/locations", $query, [], $format);
    }

    /**
     * List locations
     *
     * @param $locationId
     * @param string $format
     * @return array|string
     */
    public function getLocation($locationId, string $format = 'json')
    {
        return $this->request("/locations/{$locationId}", [], [], $format);
    }

    /**
     * Get clan versus rankings for a specific location
     *
     * @param $locationId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanVersusRankings($locationId, array $query = [], string $format = 'json')
    {
        return $this->request("/locations/{$locationId}/rankings/clans-versus", $query, [], $format);
    }
}
