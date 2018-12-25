<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  Task $task
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $request->has('completed') ? $task->complete() : $task->incomplete();

        return redirect()->route('projects.show', ['project' => $task->project->id]);
    }

    public function store(Request $request, Project $project)
    {
        $params = $request->validate([
            'description' => 'required|max:255'
        ]);

        $project->addTask($params);

        return back();
    }
}
