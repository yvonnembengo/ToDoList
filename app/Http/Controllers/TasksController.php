<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'desc')->get();
        return view('index', ['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->task = $request->task;
        $task->save();
        return redirect()->back()->with('success', 'Task Saved Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $task = Task::find($id);
        return view('show', ['task' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->completed = true;
        $task->save();
        return redirect()->back()->with('success', 'You are doing great!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('index')->with('success', 'Task Has Been Deleted!');
    }
}
