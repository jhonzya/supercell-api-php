<?php

namespace Jhonzya\SupercellApi\Test\BrawlStars;

use Jhonzya\SupercellApi\Test\BrawlStarsBase;

class RankingsTest extends BrawlStarsBase
{
    public function testGetPowerPlayRankings()
    {
        $this->executeRequestWithTwoTagsTest('getPowerPlayRankings');
    }

    public function testGetPowerPlaySeasons()
    {
        $this->executeRequestWithTagTest('getPowerPlaySeasons');
    }

    public function testGetClubRankings()
    {
        $this->executeRequestWithTagTest('getClubRankings');
    }

    public function testGetBrawlerRankings()
    {
        $this->executeRequestWithTwoTagsTest('getBrawlerRankings');
    }

    public function testGetPlayerRankings()
    {
        $this->executeRequestWithTagTest('getPlayerRankings');
    }
}
