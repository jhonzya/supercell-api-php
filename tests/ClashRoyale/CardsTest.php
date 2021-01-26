<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class CardsTest extends ClashRoyaleBase
{
    public function testGetCards()
    {
        $this->executeRequestWithoutTagTest('getCards');
    }
}
