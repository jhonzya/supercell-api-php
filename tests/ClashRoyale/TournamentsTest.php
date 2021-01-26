<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class TournamentsTest extends ClashRoyaleBase
{
    public function testGetTournaments()
    {
        $this->executeRequestWithoutTagTest('getTournaments');
    }

    public function testGetTournament()
    {
        $this->executeRequestWithTagTest('getTournament');
    }
}
