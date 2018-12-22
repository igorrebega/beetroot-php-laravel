@extends('layouts.app')

@section('content')

    <h2>Edit project {{$project->title}}</h2>

    <div class="row">
        <div class="col-sm">
            <form action="{{route('projects.update',['project'=>$project->id])}}" method="POST">
                @method('PATCH')
                @include('project.partials.form')

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>

@endsection