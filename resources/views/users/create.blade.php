@extends('layouts.app')

@section('content')
    <h2>Create user</h2>
    <form action="{{route('users.store')}}" method="POST">
        @csrf

        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">

        <input type="submit" value="Create new user">
    </form>
@endsection