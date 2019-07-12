<?php
namespace App\Facades;

class GuzzleApiFacade
{
    protected $client;
    public function __construct()
    {
        $this->client = new GuzzleHttp\Client(['base_uri' => env('BASE_HERO_API')]);
    }

    public function getContent()
    {
        return $this->client->get('http://35.162.46.100/superheroes/');
    }
}
