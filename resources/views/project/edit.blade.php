@extends('layouts.app')

@section('content')

    <h2>Edit project {{$project->title}}</h2>

    <div class="row">
        <div class="col-sm">
            <form action="{{route('projects.update',['project'=>$project->id])}}" method="POST">
                @method('PATCH')
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title"
                           value="{{$project->title}}">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description"
                              class="form-control">{{$project->description}}</textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>

@endsection