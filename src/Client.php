<?php


namespace Jhonzya\SupercellApi\ClashOfClans;

use GuzzleHttp\Client as HttpClient;

class Client
{
    private static $instance = null;
    private $api = 'https://api.clashofclans.com/v1';
    public $http;

    private function __construct()
    {
        $this->http = new HttpClient([
            'base_uri' => $this->api,
        ]);
    }

    public function __clone()
    {
    }

    public static function getInstance()
    {
        if(is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance->http;
    }
}
