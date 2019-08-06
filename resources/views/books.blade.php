@extends('layout.layout')
@section('title', 'Books List')
@section('content')
@if(!empty($books))

    @foreach($books as $value)
    <div>
    <ul>
    <li>First Name: {{ $value->title }} </li>
    <li>First Name: {{ $value->author }} </li>
    <button><a href="/books/{{$value->id}}/edit">Edit Book</a></button>
    <button><a href="/books/{{$value->id}}">See Details</a></button>
    </ul>
    </div>
    <hr>
    @endforeach
@endif
<button><a href="/books/create">Store a new book</a></button>
@endsection
