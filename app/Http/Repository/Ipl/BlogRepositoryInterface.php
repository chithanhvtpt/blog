<?php

namespace App\Http\Repository\Ipl;



use Illuminate\Http\Request;

interface BlogRepositoryInterface extends BaseRepositoryInterface
{
    public function getAll();

    public function create(Request $request);

    public function update($id, Request $request);
}
