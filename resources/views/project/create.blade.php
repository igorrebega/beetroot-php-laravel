@extends('layouts.app')

@section('content')

    <h2>Create project</h2>

    <div class="row">
        <div class="col-sm">
            <form action="{{route('projects.store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
        <div class="col-sm">
        </div>
    </div>

@endsection