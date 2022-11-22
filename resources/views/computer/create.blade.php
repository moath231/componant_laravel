@extends('master')
@section('content')
    <h1>cteate new computer</h1>

    <form action="{{ route('computer.store')}}" method="POST">
        @csrf
        <label for="">name</label>
        <input type="text" name="comname" id="comname" value="{{ old('comname') }}">
        @error('comname')
            {{ $message }}
        @enderror
        <br>
        <label for="">oragin</label>
        <input type="text" name="comoragin" id="comoragin" value="{{ old('comoragin') }}">
        @error('comoragin')
            {{ $message }}
        @enderror
        <br>
        <label for="">price</label>
        <input type="text" name="comprice" id="comprice" value="{{ old('comprice') }}">
        @error('comprice')
            {{ $message }}
        @enderror
        <br>
        <input type="submit" value="submit">
    </form>
@endsection


@section('title','create')
