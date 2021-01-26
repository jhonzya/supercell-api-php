<?php

namespace Jhonzya\SupercellApi\Traits\BrawlStars;

/**
 * Access global and local rankings.
 *
 * Trait RankingsTrait
 */
trait RankingsTrait
{
    /**
     * Get power play rankings for a country or global rankings. Season identifiers can be found by using
     * the /rankings/{countryCode}/powerplay/seasons API endpoint. Also, 'latest' can be used as seasonId
     * to get rankings for the latest season.
     *
     * @param $countryCode
     * @param $seasonId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPowerPlayRankings($countryCode, $seasonId, array $query = [], string $format = 'json')
    {
        return $this->request("rankings/{$countryCode}/powerplay/seasons/{$seasonId}", $query, [], $format);
    }

    /**
     * Get list of power play seasons for a country or global rankings.
     *
     * @param $countryCode
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPowerPlaySeasons($countryCode, array $query = [], string $format = 'json')
    {
        return $this->request("rankings/{$countryCode}/powerplay/seasons", $query, [], $format);
    }

    /**
     * Get club rankings for a country or global rankings.
     *
     * @param $countryCode
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClubRankings($countryCode, array $query = [], string $format = 'json')
    {
        return $this->request("rankings/{$countryCode}/clubs", $query, [], $format);
    }

    /**
     * Get brawler rankings for a country or global rankings. Brawler identifiers can be found by using
     * the /v1/brawlers API endpoint.
     *
     * @param $countryCode
     * @param $brawlerId
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getBrawlerRankings($countryCode, $brawlerId, array $query = [], string $format = 'json')
    {
        return $this->request("rankings/{$countryCode}/brawlers/{$brawlerId}", $query, [], $format);
    }

    /**
     * Get player rankings for a country or global rankings.
     *
     * @param $countryCode
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getPlayerRankings($countryCode, array $query = [], string $format = 'json')
    {
        return $this->request("rankings/{$countryCode}/players", $query, [], $format);
    }
}
