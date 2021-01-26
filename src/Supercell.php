<?php declare(strict_types=1);

namespace Jhonzya\SupercellApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

abstract class Supercell
{
    protected $token;
    protected $client;
    protected $api;

    public function __construct($token, Client $client = null)
    {
        $this->token = $token;
        $this->client = $client;
    }

    /**
     * @param $url
     * @param array $query
     * @param array $body
     * @param string $format
     * @param string $type
     * @return array|string
     * @throws GuzzleException
     */
    protected function request($url, array $query = [], array $body = [], string $format = 'json', string $type = 'get')
    {
        $response = $this->getHttpClient()->request(
            $type,
            $url,
            [
                'query' => $query,
                'form_params' => $body,
                'headers' => ['authorization' => 'Bearer ' . $this->token]
            ]
        );

        $contents = $response->getBody()->getContents();

        switch ($format) {
            case 'array':
                $response = json_decode($contents);
                break;
            case 'object':
                $response = json_decode($contents, true);
                break;
            case 'json':
            default:
                $response = $contents;
                break;
        }

        return $response;
    }

    /**
     * @return Client
     */
    protected function getHttpClient(): Client
    {
        if (is_null($this->client)) {
            $this->client = new Client([
                'base_uri' => $this->api,
            ]);
        }

        return $this->client;
    }
}
