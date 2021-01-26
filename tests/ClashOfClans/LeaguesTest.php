<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\ClashOfClans;
use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class LeaguesTest extends ClashOfClansBase
{
    public function testGetLeague()
    {
        $this->executeRequestWithTagTest('getLeague');
    }

    public function testGetLeagues()
    {
        $this->executeRequestWithoutTagTest('getLeagues');
    }

    public function testGetLeagueSeasons()
    {
        $this->executeRequestWithTagTest('getLeagueSeasons');
    }

    public function testGetWarLeague()
    {
        $this->executeRequestWithTagTest('getWarLeague');
    }

    public function testGetLeagueSeasonRankings()
    {
        $this->executeRequestWithTwoTagsTest('getLeagueSeasonRankings');
    }

    public function testGetWarLeagues()
    {
        $this->executeRequestWithoutTagTest('getWarLeagues');
    }
}
