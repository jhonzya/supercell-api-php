<?php

namespace Jhonzya\SupercellApi\Test;

use Jhonzya\SupercellApi\ClashOfClans;

class ClashOfClansBase extends SupercellBase
{
    protected $classname = ClashOfClans::class;

    /**
     * @param string $file
     * @return false|string
     */
    protected function getJsonResponse(string $file)
    {
        return file_get_contents(__DIR__. "/Mocks/ClashOfClans/{$file}");
    }
}
