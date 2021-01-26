<?php

namespace Jhonzya\SupercellApi\Test\BrawlStars;

use Jhonzya\SupercellApi\Test\BrawlStarsBase;

class PlayersTest extends BrawlStarsBase
{
    public function testGetPlayerBattleLog()
    {
        $this->executeRequestWithTagTest('getPlayerBattleLog');
    }

    public function testGetPlayer()
    {
        $this->executeRequestWithTagTest('getPlayer');
    }
}
