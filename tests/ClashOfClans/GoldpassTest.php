<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class GoldpassTest extends ClashOfClansBase
{
    public function testGetGoldpass()
    {
        $this->executeRequestWithoutTagTest('getGoldpass');
    }
}
