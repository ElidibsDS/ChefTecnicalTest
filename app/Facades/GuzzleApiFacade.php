<?php
namespace App\Facades;

use GuzzleHttp\Client;

class GuzzleApiFacade
{
    public static function getContent()
    {

        $client = new Client();

        $response = $client->request('GET', env('BASE_API'));
        $body = $response->getBody()->getContents();

        return $body;

    }
}
