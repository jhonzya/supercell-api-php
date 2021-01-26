<?php

namespace Jhonzya\SupercellApi\Test;

class ClashOfClansBase extends SupercellBase
{
    /**
     * @param string $file
     * @return false|string
     */
    protected function getJsonResponse(string $file)
    {
        return file_get_contents(__DIR__. "/Mocks/ClashOfClans/{$file}");
    }
}
