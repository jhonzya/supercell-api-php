<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\ClashRoyale\ClansTrait;

class ClashRoyale extends Supercell
{
    use ClansTrait;

    protected $api = 'https://api.clashroyale.com/v1/';
}
