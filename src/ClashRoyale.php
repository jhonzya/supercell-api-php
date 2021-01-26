<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\ClashRoyale\CardsTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\ClansTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\GlobalTournamentsTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\LocationsTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\PlayersTrait;
use Jhonzya\SupercellApi\Traits\ClashRoyale\TournamentsTrait;

class ClashRoyale extends Supercell
{
    use ClansTrait;
    use PlayersTrait;
    use CardsTrait;
    use TournamentsTrait;
    use LocationsTrait;
    use GlobalTournamentsTrait;

    protected $api = 'https://api.clashroyale.com/v1/';
}
