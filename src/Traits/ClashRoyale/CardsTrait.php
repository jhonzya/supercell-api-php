<?php

namespace Jhonzya\SupercellApi\Traits\ClashRoyale;

/**
 * Access card information.
 *
 * Trait CardsTrait
 */
trait CardsTrait
{
    /**
     * Get list of available cards.
     *
     * @param array $query
     * @param string $format
     * @return mixed
     */
    public function getCards(array $query = [], string $format = 'json')
    {
        return $this->request('cards', $query, [], $format);
    }
}
