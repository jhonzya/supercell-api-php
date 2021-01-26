<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class ClansTest extends ClashRoyaleBase
{
    public function testGetClanWarLog()
    {
        $this->executeRequestWithTagTest('getClanWarLog');
    }

    public function testGetClans()
    {
        $this->executeRequestWithoutTagTest('getClans');
    }

    public function testGetClanRiverRaceLog()
    {
        $this->executeRequestWithTagTest('getClanRiverRaceLog');
    }

    public function testGetClanCurrentWar()
    {
        $this->executeRequestWithTagTest('getClanCurrentWar');
    }

    public function testGetClan()
    {
        $this->executeRequestWithTagTest('getClan');
    }

    public function testGetClanMembers()
    {
        $this->executeRequestWithTagTest('getClanMembers');
    }

    public function testGetClanCurrentRiverRace()
    {
        $this->executeRequestWithTagTest('getClanCurrentRiverRace');
    }

}
