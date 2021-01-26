<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 * Access player specific information.
 *
 * Trait PlayersTrait
 */
trait PlayersTrait
{
    /**
     * Get information about a single player by player tag.
     *
     * @param $playerTag
     * @param string $format
     * @return array|string
     */
    public function getPlayer($playerTag, string $format = 'json')
    {
        return $this->request("players/{$playerTag}", [], [], $format);
    }

    /**
     * Get list of reward chests that the player will receive next in the game.
     *
     * @param $playerTag
     * @param string $format
     * @return array|string
     */
    public function getPlayerUpcomingChests($playerTag, string $format = 'json')
    {
        return $this->request("players/{$playerTag}/upcomingchests", [], [], $format);
    }

    /**
     * Get list of recent battles for a player.
     *
     * @param $playerTag
     * @param string $format
     * @return array|string
     */
    public function getPlayerBattleLog($playerTag, string $format = 'json')
    {
        return $this->request("players/{$playerTag}/battlelog", [], [], $format);
    }
}
