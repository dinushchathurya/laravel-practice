<?php

namespace App\Repositories\Interfaces;

interface CustomerRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function update($id);

}
