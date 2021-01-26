<?php

namespace Jhonzya\SupercellApi\Test\BrawlStars;

use Jhonzya\SupercellApi\Test\BrawlStarsBase;

class ClubsTest extends BrawlStarsBase
{
    public function testGetClubMembers()
    {
        $this->executeRequestWithTagTest('getClubMembers');
    }

    public function testGetClub()
    {
        $this->executeRequestWithTagTest('getClub');
    }

}
