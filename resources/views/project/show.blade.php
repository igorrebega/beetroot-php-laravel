@extends('layouts.app')

@section('content')
    <h2>{{$project->title}}</h2>

    <p>
        {{$project->description}}
    </p>

    <div>
        @foreach($project->tasks as $task)
            <form action="{{route('tasks.complete',['task'=>$task->id])}}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group form-check">
                    <input
                            type="checkbox"
                            class="form-check-input"
                            id="taskCheckbox{{$task->id}}"
                            onChange="this.form.submit()"
                            name="completed"
                            @if($task->completed) checked @endif
                    >
                    <label class="form-check-label" for="taskCheckbox{{$task->id}}">
                        {{$task->description}}
                    </label>
                </div>
            </form>
        @endforeach
    </div>
@endsection