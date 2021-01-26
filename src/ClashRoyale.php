<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\ClashRoyale\CardsTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\ClansTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\PlayersTrait;

class ClashRoyale extends Supercell
{
    use ClansTrait;
    use PlayersTrait;
    use CardsTrait;

    protected $api = 'https://api.clashroyale.com/v1/';
}
