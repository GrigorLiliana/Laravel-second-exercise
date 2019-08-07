@extends('layout.layout')
@section('title', 'Books List')
@section('content')
@if(!empty($books))

    @foreach($books as $value)
    <div>
    <ul>
    <li>Title: {{ $value->title }} </li>
    <li>Author: {{ $value->author }} </li>
    </ul>
    <button><a href="/books/{{$value->id}}/edit">Edit Book</a></button>
    <button><a href="/books/{{$value->id}}">See Details</a></button>

    <form action="/books/{{$value->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Book">
    </form>

    </div>
    <hr>
    @endforeach
@endif
<button><a href="/books/create">Store a new book</a></button>
@endsection
