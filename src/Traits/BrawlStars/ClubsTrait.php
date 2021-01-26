<?php

namespace Jhonzya\SupercellApi\Traits\BrawlStars;

/**
 * Access club specific information.
 *
 * Trait ClubsTrait
 */
trait ClubsTrait
{
    /**
     * List club members.
     *
     * @param $clubTag
     * @param array $query
     * @param string $format
     * @return array|string
     */
    public function getClubMembers($clubTag, array $query = [], string $format = 'json')
    {
        return $this->request("clubs/{$clubTag}/members", $query, [], $format);
    }

    /**
     * Get information about a single clan by club tag. Club tags can be found in game.
     *
     * @param $clubTag
     * @param string $format
     * @return array|string
     */
    public function getClub($clubTag, string $format = 'json')
    {
        return $this->request("clubs/{$clubTag}", [], [], $format);
    }
}
