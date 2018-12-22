<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class ProjectTaskController extends Controller
{
    /**
     * Update the specified resource in storage.
     *
     * @param  Task $task
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $completed = $request->has('completed');

        $task->update(['completed' => $completed]);

        return redirect()->route('projects.show', ['project' => $task->project->id]);
    }
}
