<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryInterface
{
    public function __construct(Model $model);
    public function store($data);
    public function getList();
    public function get($id);
    public function update($data, $id);
    public function destroy($id);
}
