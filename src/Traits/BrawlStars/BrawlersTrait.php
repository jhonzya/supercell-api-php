<?php

namespace Jhonzya\SupercellApi\Traits\BrawlStars;

/**
 * Access general brawler information
 *
 * Trait BrawlersTrait
 * @package Jhonzya\SupercellApi\Traits\BrawlStars
 */
trait BrawlersTrait
{
    /**
     * Get list of available brawlers.
     *
     * @param array $query
     * @param string $format
     * @return mixed
     */
    public function getBrawlers(array $query = [], string $format = 'json')
    {
        return $this->request("brawlers", $query, [], $format);
    }

    /**
     * Get information about a brawler.
     *
     * @param string $brawlerId
     * @param string $format
     * @return mixed
     */
    public function getBrawler(string $brawlerId, string $format = 'json')
    {
        return $this->request("brawlers/{$brawlerId}", [], [], $format);
    }
}
