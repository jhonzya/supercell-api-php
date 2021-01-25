<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\ClashOfClans\ClansTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\GoldpassTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\LabelsTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\LeaguesTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\LocationsTrait;
use Jhonzya\SupercellApi\Traits\ClashOfClans\PlayersTrait;

class ClashOfClans extends Supercell
{
    use ClansTrait;
    use PlayersTrait;
    use LeaguesTrait;
    use GoldpassTrait;
    use LabelsTrait;
    use LocationsTrait;
}
