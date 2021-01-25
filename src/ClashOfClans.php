<?php

namespace Jhonzya\SupercellApi;

use GuzzleHttp\Client;
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

    public function __construct($token, Client $client = null)
    {
        if(is_null($client)) {
            $client = new Client([
                'base_uri' => 'https://api.clashofclans.com/v1/',
            ]);
        }

        parent::__construct($token, $client);
    }
}
