<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class LocationsTest extends ClashRoyaleBase
{
    public function testGetClanRankings()
    {
        $this->executeRequestWithTagTest('getClanRankings');
    }

    public function testGetPlayerRankings()
    {
        $this->executeRequestWithTagTest('getPlayerRankings');
    }

    public function testGetClanWarRankings()
    {
        $this->executeRequestWithTagTest('getClanWarRankings');
    }

    public function testGetTopPlayerLeagueSeason()
    {
        $this->executeRequestWithTagTest('getTopPlayerLeagueSeason');
    }

    public function testGetTopPlayerRankingsLeagueSeason()
    {
        $this->executeRequestWithTagTest('getTopPlayerRankingsLeagueSeason');
    }

    public function tesGetTopPlayersLeagueSeason()
    {
        $this->executeRequestWithoutTagTest('getTopPlayersLeagueSeason');
    }

    public function testGetLocations()
    {
        $this->executeRequestWithoutTagTest('getLocations');
    }

    public function testGetLocation()
    {
        $this->executeRequestWithTagTest('getLocation');
    }

    public function testGetGlobalTournamentRankings()
    {
        $this->executeRequestWithTagTest('getGlobalTournamentRankings');
    }
}
