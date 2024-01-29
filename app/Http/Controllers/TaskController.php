<?php

namespace App\Http\Controllers;

use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = task::get();
        return view('pages.index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required | max:60',
            'description' => 'required | max:255'
        ]);

        $task = new task([
            'title' => $request->title,
            'description' => $request->description,
            'status' => 0
        ]);
        $task->save();
        return redirect()->route('task.index')->with('status', 'The task has Added');
    }

    /**
     * Display the specified resource.
     */
    public function show(task $task)
    {
//
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(task $task)
    {
        return view('pages.edit')->with('task', $task);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, task $task)
    {
        $request->validate([
            'title' => 'required | max:60',
            'description' => 'required | max:255'
        ]);

        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status ? 1 : 0;
        $task->save();

        return redirect()->route('task.index')->with('status', 'The task has Edited');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(task $task)
    {
        $task->delete();
        return redirect()->route('task.index')->with('status', 'The task has deleted');
    }
}
