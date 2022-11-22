@extends('master')
@section('content')
    <h1>edit the computer</h1>

    <form action="{{ route('computer.update',$computer)}}" method="POST">
        {{ method_field('PUT') }}
        @csrf
        <label for="">name</label>
        <input type="text" name="comname" value="{{ $computer['name'] }}" id="comname"><br>
        <label for="">oragin</label>
        <input type="text" name="comoragin" value="{{ $computer['origan'] }}" id="comoragin"><br>
        <label for="">price</label>
        <input type="text" name="comprice" value="{{ $computer -> price }}" id="comprice"><br>
        @error('comprice')
            {{ $error }}
        @enderror
        <input type="submit" value="submit">
    </form>
@endsection


@section('title','edit')
