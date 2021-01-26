<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class GlobalTournamentsTest extends ClashRoyaleBase
{
    public function testGetGlobalTournaments()
    {
        $this->executeRequestWithoutTagTest('getGlobalTournaments');
    }
}
