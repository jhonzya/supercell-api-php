<?php

namespace Jhonzya\SupercellApi\Test\ClashRoyale;

use Jhonzya\SupercellApi\Test\ClashRoyaleBase;

class PlayersTest extends ClashRoyaleBase
{
    public function testGetPlayer()
    {
        $this->executeRequestWithTagTest('getPlayer');
    }

    public function testGetPlayerUpcomingChests()
    {
        $this->executeRequestWithTagTest('getPlayerUpcomingChests');
    }

    public function testGetPlayerBattleLog()
    {
        $this->executeRequestWithTagTest('getPlayerBattleLog');
    }

}
