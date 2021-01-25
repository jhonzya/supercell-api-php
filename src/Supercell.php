<?php declare(strict_types=1);

namespace Jhonzya\SupercellApi;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Supercell
{
    protected $token;
    protected $client;
    protected $http;

    public function __construct($token, Client $client)
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
    public function request($url, array $query = [], array $body = [], string $format = 'json', string $type = 'get')
    {
        $response = $this->client->request(
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
}
