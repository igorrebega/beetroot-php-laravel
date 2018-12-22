@extends('layouts.app')

@section('content')

    <h2>Create project</h2>

    <div class="row">
        <div class="col-sm">
            <form action="{{route('projects.store')}}" method="POST">
                @include('project.partials.form')

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>

@endsection