<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\EntityRepositoryInterface;

class SuperHeroController extends Controller
{
    protected $repository;

    public function __construct(EntityRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Get a super heroe from id
     * @return View
     */
    public function Get($id)
    {
        return view("country")->with('country', $this->repository->get($id));
    }

    /**
     * Get listed all super heroes
     * @return View
     */
    public function GetAll()
    {

        return view("countries")->with('countries', $this->repository->getAll());
    }

    /**
     * Get super heroes ranking
     * @return View
     */

    public function Ranking()
    {
        return view("ranking")->with('countries', $this->repository->getAll());
    }
}
