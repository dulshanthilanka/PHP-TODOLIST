<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    protected $task;

    public function __construct()
    {
        $this->task = new Todo();
    }

    public function index()
    {
        $response['tasks'] = $this->task->all();
        return view('pages.todo.index')->with($response);
    }

    public function store(Request $request)
    {
        $this->task->create($request->all());
        return redirect()->back();
    }

    public function delete($task_id)
    {
        $task = $this->task->find($task_id);
        $task->delete();
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $response['task'] = Todo::find($request->task_id);
        return view('pages.todo.edit')->with($response);
    }

    public function update(Request $request, $task_id)
    {
        TodoFacade::update($request->all(), $task_id);
        return redirect()->back();
    }
}
