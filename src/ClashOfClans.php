<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\ClashOfClans\ClansTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\PlayersTrait;

class ClashOfClans extends Supercell
{
    use ClansTrait;
    use PlayersTrait;
}
