<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Show all tasks
    public function index()
    {
        $tasks = Task::latest()->get();
        return view('tasks.to-do-list', compact('tasks')); // updated name here
    }

    // Add a new task
    public function store(Request $request)
    {
        $request->validate(['title' => 'required']);
        Task::create(['title' => $request->title]);
        return redirect()->back();
    }

    // Toggle completed status
    public function update(Task $task)
    {
        $task->update(['completed' => !$task->completed]);
        return redirect()->back();
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->back();
    }
}
