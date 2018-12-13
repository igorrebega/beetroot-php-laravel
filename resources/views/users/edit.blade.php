@extends('layouts.app')

@section('content')
    <h2>Edit user {{$user->name}}</h2>
    <form action="{{route('users.update',['id'=>$user->id])}}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Name" value="{{$user->name}}">

        <button type="submit">Update</button>
    </form>
@endsection