<?php

namespace Jhonzya\SupercellApi\Test;

use Jhonzya\SupercellApi\ClashRoyale;

class ClashRoyaleBase extends SupercellBase
{
    protected $classname = ClashRoyale::class;

    /**
     * @param string $file
     * @return false|string
     */
    protected function getJsonResponse(string $file)
    {
        return file_get_contents(__DIR__. "/Mocks/ClashRoyale/{$file}");
    }
}
