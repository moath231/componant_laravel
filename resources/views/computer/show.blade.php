@extends('master')
@section('content')
    <h1>show</h1>

    <h2>{{$computer['name']}} made in {{$computer['origen']}} price is {{$computer['price']}}</h2>

    <a href="/computer">back</a>
@endsection


@section('title','show')
