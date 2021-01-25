<?php

namespace Jhonzya\SupercellApi\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use Jhonzya\SupercellApi\ClashOfClans;
use PHPUnit\Framework\TestCase;

class ClashOfClansBase extends TestCase
{
    protected $token = 'random';
    protected $tag = '#random';

    /**
     * @param string $file
     * @return false|string
     */
    protected function getJsonResponse(string $file)
    {
        return file_get_contents(__DIR__. "/Mocks/ClashOfClans/{$file}");
    }

    /**
     * @param $json
     * @return Client
     */
    protected function getMockClient($json): Client
    {
        $mock = new MockHandler([
            new Response(200, [], $json)
        ]);

        $handlerStack = HandlerStack::create($mock);
        return new Client(['handler' => $handlerStack]);
    }

    /**
     * @param $name
     */
    protected function executeRequestWithTagTest($name)
    {
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new ClashOfClans($this->token, $client);
        $response = $coc->$name($this->tag);

        $this->assertEquals($json, $response);
    }

    protected function executeRequestWithoutTagTest($name)
    {
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new ClashOfClans($this->token, $client);
        $response = $coc->$name();

        $this->assertEquals($json, $response);
    }

}
