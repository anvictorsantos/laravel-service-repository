<?php

namespace App\Services;

use App\Repositories\TaskRepositoryInterface;

class TaskService
{
    protected $repository;

    public function __construct(TaskRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function store($data)
    {
        return $this->repository->store($data);
    }

    public function getList()
    {
        return $this->repository->getList();
    } 

    public function get($id)
    {
        return $this->repository->get($id);
    } 

    public function update($data, $id)
    {   
        return $this->repository->update($data, $id);
    }

    public function destroy($id)
    {
        return $this->repository->destroy($id);
    }
}
