<?php

namespace Jhonzya\SupercellApi\Test;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;

abstract class SupercellBase extends TestCase
{
    protected $token = 'random';
    protected $tag = '#random';
    protected $classname;

    /**
     * @param string $file
     * @return false|string
     */
    abstract protected function getJsonResponse(string $file);

    /**
     * @param $json
     * @return Client
     */
    protected function getMockClient($json): Client
    {
        $mock = new MockHandler([
            new Response(200, [], $json),
        ]);

        $handlerStack = HandlerStack::create($mock);

        return new Client(['handler' => $handlerStack]);
    }

    /**
     * @param $name
     */
    protected function executeRequestWithTwoTagsTest($name)
    {
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new $this->classname($this->token, $client);
        $response = $coc->$name($this->tag, 'randomize');

        $this->assertEquals($json, $response);
    }

    /**
     * @param $name
     */
    protected function executeRequestWithTagTest($name)
    {
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new $this->classname($this->token, $client);
        $response = $coc->$name($this->tag);

        $this->assertEquals($json, $response);
    }

    /**
     * @param $name
     */
    protected function executeRequestWithoutTagTest($name)
    {
        $json = $this->getJsonResponse("{$name}.json");
        $client = $this->getMockClient($json);

        $coc = new $this->classname($this->token, $client);
        $response = $coc->$name();

        $this->assertEquals($json, $response);
    }
}
