<?php

namespace App\Http\Repository\Ipl;

interface BaseRepositoryInterface
{
    public function getAll();

    public function getById($id);

    public function delete($id);

}
