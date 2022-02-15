<?php

namespace App\Http\Repository;

use App\Http\Repository\Ipl\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $models = $this->model->all();
        return $models;
    }

    public function getById($id)
    {
        $model = $this->model->query()->find($id);
        return $model;
    }

    public function delete($id)
    {
        $model = $this->model->query()->find($id);
        $model->delete();
    }

}
