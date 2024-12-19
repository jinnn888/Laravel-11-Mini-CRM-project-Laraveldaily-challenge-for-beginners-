<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\DataTables\TaskDataTable;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TaskDataTable $dataTable)
    {
        return $dataTable->render('tasks.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create', [
            'users' => \App\Models\User::role('user')->get(),
            'clients' => \App\Models\Client::all(),
            'projects' => \App\Models\Project::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->validated());

        return redirect()->route('tasks.index')->with('success', 'New task created successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $users = \App\Models\User::role('user')->get();
        $clients = \App\Models\Client::all();
        $projects = \App\Models\Project::all();

        return view('tasks.edit', compact('task', 'users', 'clients', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTaskRequest $request, Task $task)
    {
        $task->update($request->validated());

        return redirect()->route('tasks.index')->with('success', 'New task updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'New task updated successfully.');
        
    }
}
