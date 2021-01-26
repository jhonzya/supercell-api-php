<?php

namespace Jhonzya\SupercellApi\Test\ClashOfClans;

use Jhonzya\SupercellApi\Test\ClashOfClansBase;

class LabelsTest extends ClashOfClansBase
{
    public function testGetPlayerLabels()
    {
        $this->executeRequestWithoutTagTest('getPlayerLabels');
    }

    public function testGetClanLabels()
    {
        $this->executeRequestWithoutTagTest('getClanLabels');
    }
}
