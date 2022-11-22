@extends('master')
@section('content')
  <h1>computer</h1>
  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab recusandae mollitia praesentium. Maxime sit at amet
    aut facilis commodi nisi praesentium dolor aliquam voluptas. Consequatur, ad possimus dolorem magnam commodi vel
    vero dolores!</p>
  <a href="/computer/create">create</a>
  @if (count($computer) > 0)

    <ul>
      @foreach ($computer as $com)
        <a href="{{ route('computer.show', [$com['id']]) }}" style="text-decoration:none; color:black;">
          <li style="list-style: none;">
            {{ $com['name'] }} made in {{ $com['origen'] }} price: {{ $com['price'] }}
            <a style="margin-left:20px; text-decoration:none;" href="{{ route('computer.edit', [$com]) }}">edit</a>
            {{-- <a style="margin-left:20px; text-decoration:none;" href="">delete</a> --}}
            <form action="{{ route('computer.destroy', [$com]) }}" method="POST">
              @csrf
              @method('DELETE')
              <input type="submit" value="delete">
            </form>
          </li>
        </a>
      @endforeach
    </ul>
  @endif
@endsection

@section('title', 'computer')
