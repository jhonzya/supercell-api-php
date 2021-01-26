<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class ClansTest extends ClashOfClansBase
{
    public function testGetClanCurrentWar()
    {
        $this->executeRequestWithTagTest('getClanCurrentWar');
    }

    public function testGetClanLeagueGroup()
    {
        $this->executeRequestWithTagTest('getClanLeagueGroup');
    }

    public function testGetClan()
    {
        $this->executeRequestWithTagTest('getClan');
    }

    public function testGetClanWarLeague()
    {
        $this->executeRequestWithTagTest('getClanWarLeague');
    }

    public function testGetClanWarLog()
    {
        $this->executeRequestWithTagTest('getClanWarLog');
    }

    public function testGetClanMembers()
    {
        $this->executeRequestWithTagTest('getClanMembers');
    }

    public function testGetClans()
    {
        $this->executeRequestWithoutTagTest('getClans');
    }
}
