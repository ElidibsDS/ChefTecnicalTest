<?php
namespace App\Repositories\Contracts;

interface EntityRepositoryInterface
{
    public function getAll();

    public function get($id);
}
