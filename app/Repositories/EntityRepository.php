<?php
namespace App\Repositories;

use App\Facades\GuzzleApiFacade;
use App\Repositories\Contracts\EntityRepositoryInterface;

class EntityRepository implements EntityRepositoryInterface
{

    public function getAll()
    {
        $json = GuzzleApiFacade::getContent();
        $countries = json_decode($json, true)['Response'];
        $map = array_map(array('\App\Domain\Country', 'returnCountry'), $countries);
        return $map;
    }

    public function get($id)
    {
        $json = GuzzleApiFacade::getContent();
        $countries = json_decode($json, true)['Response'];
        $key = array_search($id, array_column($countries, 'Alpha3Code'));
        return \App\Domain\Country::returnCountry($countries[$key]);
    }

}
