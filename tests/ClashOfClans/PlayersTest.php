<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\ClashOfClans;
use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class PlayersTest extends ClashOfClansBase
{
    public function testGetPlayer()
    {
        $this->executeRequestWithTagTest('getPlayer');
    }

    public function testVerifyPlayerToken()
    {
        $name = 'verifyPlayerToken';
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new ClashOfClans($this->token, $client);
        $response = $coc->$name($this->tag, 'token');

        $this->assertEquals($json, $response);
    }
}
