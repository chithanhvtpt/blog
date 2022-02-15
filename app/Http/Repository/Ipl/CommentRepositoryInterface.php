<?php

namespace App\Http\Repository\Ipl;



use Illuminate\Http\Client\Request;

interface CommentRepositoryInterface extends BaseRepositoryInterface
{
    public function create(Request $request);

    public function update($id, Request $request);
}
