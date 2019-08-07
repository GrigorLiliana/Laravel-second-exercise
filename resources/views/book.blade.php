@extends('layout.layout')
@section('title', 'Book Details')
@section('content')
@if(!empty($book))

    <div>
    <ul>
    <li>Title: {{ $book->title }} </li>
    <li>Author: {{ $book->author }} </li>
    <button><a href="/books/{{$book->id}}/edit">Edit Book</a></button>
    <form action="/books/{{$book->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Book">
    </form>
    </ul>
    </div>

@endif
<button><a href="/books/create">Store a new book</a></button>
<button><a href="/books">Back</a></button>
@endsection
