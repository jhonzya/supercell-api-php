<?php

namespace Jhonzya\SupercellApi\Test;

use Jhonzya\SupercellApi\BrawlStars;

class BrawlStarsBase extends SupercellBase
{
    protected $classname = BrawlStars::class;

    /**
     * @param string $file
     * @return false|string
     */
    protected function getJsonResponse(string $file)
    {
        return file_get_contents(__DIR__ . "/Mocks/BrawlStars/{$file}");
    }
}
