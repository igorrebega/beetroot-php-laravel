@extends('layouts.app')

@section('content')
    <h2>Users</h2>
    <ul>
        @foreach($users as $user)
            <li> {{ $user->name }} -

                <form action="{{route('users.delete',['id' => $user->id])}}" method="POST">
                    @csrf
                    @method('delete')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection