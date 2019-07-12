<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
    }

    /**
     * Get listed all super heroes
     * @return View
     */
    public function GetAll()
    {
    }

    /**
     * Get super heroes ranking
     * @return View
     */

    public function Ranking()
    {
    }
}
