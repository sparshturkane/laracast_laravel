<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('task/all', compact('tasks'));
    }

    public function show(Task $id) // Task::find(wildcard);
    {
        // $tasks = Task::find($id);
        return $id;
        return view('task/one', compact('tasks'));
    }
}
