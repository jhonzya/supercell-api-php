<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

/**
 * Access clan specific information
 *
 * Trait ClansTrait
 * @package Jhonzya\SupercellApi\Traits\ClashOfClans
 */
trait ClansTrait
{
    /**
     * Retrieve information about clan's current clan war.
     *
     * @param $clanTag
     * @param string $format
     * @return array|string
     */
    public function getClanCurrentWar($clanTag, string $format = 'json')
    {
        return $this->request("clans/{$clanTag}/currentwar", [], [], $format);
    }

    /**
     * Retrieve information about clan's current clan war league group.
     *
     * @param $clanTag
     * @param string $format
     * @return array|string
     */
    public function getClanLeagueGroup($clanTag, string $format = 'json')
    {
        return $this->request("clans/{$clanTag}/currentwar/leaguegroup", [], [], $format);
    }

    /**
     * Get information about a single clan by clan tag.
     *
     * @param $clanTag
     * @param string $format
     * @return array|string
     */
    public function getClan($clanTag, string $format = 'json')
    {
        return $this->request("clans/{$clanTag}", [], [], $format);
    }

    /**
     * Retrieve information about individual clan war league war.
     *
     * @param $warTag
     * @param string $format
     * @return array|string
     */
    public function getClanWarLeague($warTag, string $format = 'json')
    {
        return $this->request("clanwarleagues/wars/{$warTag}", [], [], $format);
    }

    /**
     * Retrieve clan's clan war log.
     *
     * @param $clanTag
     * @param array $query
     * @param string $format
     * @return array|string
     *
     */
    public function getClanWarLog($clanTag, array $query = [], string $format = 'json')
    {
        return $this->request("clans/{$clanTag}/warlog", $query, [], $format);
    }

    /**
     * List clan members.
     * @param $clanTag
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClanMembers($clanTag, array $query = [], string $format = 'json')
    {
        return $this->request("clans/{$clanTag}/members", $query, [], $format);
    }

    /**
     * Search all clans by name and/or filtering the results using various criteria. At least one filtering criteria
     * must be defined and if name is used as part of search, it is required to be at least three characters long.
     * It is not possible to specify ordering for results so clients should not rely on any specific ordering as that
     * may change in the future releases of the API.
     *
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClans(array $query = [], string $format = 'json')
    {
        return $this->request("clans", $query, [], $format);
    }

}
