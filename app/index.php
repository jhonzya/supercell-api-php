<?php

require_once __DIR__ . '/../vendor/autoload.php';

$client = new \GuzzleHttp\Client([
    'base_uri' => 'https://api.clashofclans.com/v1/',
]);

$token = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzUxMiIsImtpZCI6IjI4YTMxOGY3LTAwMDAtYTFlYi03ZmExLTJjNzQzM2M2Y2NhNSJ9.eyJpc3MiOiJzdXBlcmNlbGwiLCJhdWQiOiJzdXBlcmNlbGw6Z2FtZWFwaSIsImp0aSI6ImQ3ZWUxZDY0LWRmYzYtNDA5NC05NDFhLTkxZjgyYTMzYWEzMCIsImlhdCI6MTYxMTM1MzYyNywic3ViIjoiZGV2ZWxvcGVyLzAzODBiYzU0LWQzM2UtNWViZi1lN2U2LTliMmRhM2EzOGJkNCIsInNjb3BlcyI6WyJjbGFzaCJdLCJsaW1pdHMiOlt7InRpZXIiOiJkZXZlbG9wZXIvc2lsdmVyIiwidHlwZSI6InRocm90dGxpbmcifSx7ImNpZHJzIjpbIjE4Ny4xODkuMjQyLjIyMSJdLCJ0eXBlIjoiY2xpZW50In1dfQ.aCOsydet3-9HQuWaqdvH3GmLYsmqTB6LAkZZf3UD9y6rQSkP0pNUN-sgZIeV3Ud1Tn-peIvKSNe6Gpzrt2whSQ';
$clanTag = '%2329J9ORYQU';

$clash = new \Jhonzya\SupercellApi\ClashOfClans($token, $client);
print_r($clash->getClan($clanTag, 'array'));
