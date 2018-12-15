@extends('layouts.app')

@section('content')
    <h2>Projects</h2>

    <p>
        <a href="{{route('projects.create')}}" class="btn btn-success">Create new project</a>
    </p>

    <table class="table table-bordered">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($projects as $project)
            <tr>
                <td scope="row">{{$project->id}}</td>
                <td>{{$project->title}}</td>
                <td>
                    <a href="{{route('projects.show',['project'=>$project->id])}}" class="btn btn-success">Show</a>
                    <a href="{{route('projects.edit',['project'=>$project->id])}}" class="btn btn-primary">Edit</a>

                    <form method="POST" action="{{route('projects.destroy',['project'=>$project])}}"
                          style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection