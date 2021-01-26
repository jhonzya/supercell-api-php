<?php

namespace Jhonzya\SupercellApi\Traits\BrawlStars;

/**
 * Access player specific information.
 *
 * Trait PlayersTrait
 */
trait PlayersTrait
{
    /**
     * Get list of recent battle results for a player.
     * NOTE: It may take up to 30 minutes for a new battle to appear in the battlelog.
     *
     * @param $playerTag
     * @param string $format
     * @return array|string
     */
    public function getPlayerBattleLog($playerTag, string $format = 'json')
    {
        return $this->request("players/{$playerTag}/battlelog", [], [], $format);
    }

    /**
     * Get information about a single player by player tag.
     * Player tags can be found either in game or by from clan member list..
     *
     * @param $playerTag
     * @param string $format
     * @return array|string
     */
    public function getPlayer($playerTag, string $format = 'json')
    {
        return $this->request("players/{$playerTag}", [], [], $format);
    }
}
