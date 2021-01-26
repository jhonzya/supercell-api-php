<?php

namespace Jhonzya\SupercellApi\Test\BrawlStars;

use Jhonzya\SupercellApi\Test\BrawlStarsBase;

class BrawlersTest extends BrawlStarsBase
{
    public function testGetBrawlers()
    {
        $this->executeRequestWithoutTagTest('getBrawlers');
    }

    public function testGetBrawler()
    {
        $this->executeRequestWithTagTest('getBrawler');
    }
}
