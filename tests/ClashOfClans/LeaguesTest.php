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
        $name = 'getLeagueSeasonRankings';
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new ClashOfClans($this->token, $client);
        $response = $coc->$name($this->tag, 'season');

        $this->assertEquals($json, $response);
    }

    public function testGetWarLeagues()
    {
        $this->executeRequestWithoutTagTest('getWarLeagues');
    }

}
