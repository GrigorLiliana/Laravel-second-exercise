@extends('layout.layout')
@section('title', 'Edit book')
@section('content')
<form action="/books/{{$book->id}}" method="POST">
@csrf
@method('PUT')
<input type="text" value="{{ $book->title }}" name="title" placeholder="Define a title">
<input type="text" value="{{ $book->author }}" name="author" placeholder="Define a author">
<input type="submit" value="Edit">
</form>
<form action="/books/{{$book->id}}" method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="Delete Book">
    </form>

@endsection
