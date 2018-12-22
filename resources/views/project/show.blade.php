@extends('layouts.app')

@section('content')
    <h2>{{$project->title}}</h2>

    <p>
        {{$project->description}}
    </p>

    <div>
        @foreach($project->tasks as $task)
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="taskCheckbox">
                <label class="form-check-label" for="taskCheckbox">{{$task->description}}</label>
            </div>
        @endforeach
    </div>
@endsection