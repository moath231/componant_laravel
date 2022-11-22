@extends('master')
@section('content')
    <form class="formsginup" action="{{ route('users.store') }}" method="POST">
        @csrf
        <label for="">
            name
            <input type="text" name="name" id="name" value="{{ old('name') }}">
        </label>
        <label for="">
            username
            <input type="text" name="username" id="username">
        </label>
        <label for="">
            email
            <input type="email" name="email" id="email">
        </label>
        <label for="">
            password
            <input type="password" name="password" id="password">
        </label>
        <label for="">
            repet password
            <input type="password" name="passwordretry" id="passwordretry">
        </label>

        <input type="submit" value="submit">
    </form>
@endsection


@section('title','sginup')
