<?php

namespace Jhonzya\SupercellApi;

use Jhonzya\SupercellApi\Traits\BrawlStars\BrawlersTrait;
use Jhonzya\SupercellApi\Traits\BrawlStars\ClubsTrait;
use Jhonzya\SupercellApi\Traits\BrawlStars\PlayersTrait;

class BrawlStars extends Supercell
{
    use PlayersTrait;
    use ClubsTrait;
    use BrawlersTrait;

    protected $api = 'https://api.brawlstars.com/v1/';
}
