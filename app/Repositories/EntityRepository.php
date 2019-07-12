<?php
namespace App\Repositories;

use App\Repositories\Contracts\EntityRepositoryInterface;

abstract class EntityRepository implements EntityRepositoryInterface
{

    public function getAll()
    {
        $json = GuzzleApiFacade::getContent();
        var_dump(json_decode($json));
        var_dump(json_decode($json, true));
        return json_decode($json, true);

    }

    public function get($id)
    {
        $json = GuzzleApiFacade::getContent();
        var_dump(json_decode($json));
        var_dump(json_decode($json, true));
        return json_decode($json, true);

    }
}
