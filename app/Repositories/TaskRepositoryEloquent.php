<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class TaskRepositoryEloquent implements TaskRepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function getList()
    {
        return $this->model->all();
    } 

    public function get($id)
    {
        return $this->model->find($id);
    } 

    public function update($data, $id)
    {   
        return $this->model->find($id)->update($data);
    }

    public function destroy($id)
    {
        return $this->model->find($id)->delete();
    } 
}
