<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\TaskService;

class TasksController extends Controller
{
    protected $service;

    public function __construct(TaskService $service)
    {
        $this->service = $service;
    }

    public function store(Request $request)
    {
        return $this->service->store([
            'title' => $request->title,
            'description' => $request->description,
        ]);
    }

    public function getList()
    {
        return $this->service->getList();
    } 

    public function get($id)
    {
        return $this->service->get($id);
    } 

    public function update(Request $request, $id)
    {   
        return $this->service->update([
            'title' => $request->title,
            'description' => $request->description,
        ], $id);
    }

    public function destroy($id)
    {
        return $this->service->destroy($id);
    }
}
