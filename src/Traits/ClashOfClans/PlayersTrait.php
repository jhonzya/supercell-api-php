<?php

namespace Jhonzya\SupercellApi\Traits\ClashOfClans;

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
     * Verify player API token that can be found from the game settings.
     * This API call can be used to check that players own the game accounts they claim to own as they need to provide
     * the one-time use API token that exists inside the game.
     *
     * @param $playerTag
     * @param string $token
     * @param string $format
     * @return array|string
     */
    public function verifyPlayerToken($playerTag, string $token, string $format = 'json')
    {
        return $this->request("players/{$playerTag}/verifytoken", [], [
            'token' => $token,
        ], $format, 'post');
    }
}
