<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class LocationsTest extends ClashOfClansBase
{
    public function testGetPlayerVersusRankings()
    {
        $this->executeRequestWithTagTest('getPlayerVersusRankings');
    }

    public function testGetClanRankings()
    {
        $this->executeRequestWithTagTest('getClanRankings');
    }

    public function testGetPlayerRankings()
    {
        $this->executeRequestWithTagTest('getPlayerRankings');
    }

    public function testGetLocations()
    {
        $this->executeRequestWithoutTagTest('getLocations');
    }

    public function testGetLocation()
    {
        $this->executeRequestWithTagTest('getLocation');
    }

    public function testGetClanVersusRankings()
    {
        $this->executeRequestWithTagTest('getClanVersusRankings');
    }
}
