@extends('layout.layout')
@section('title', 'Create a book')
@section('content')
<form action="/books" method="POST">
@csrf
<input type="text" name="title" placeholder="Define a title">
<input type="text" name="author" placeholder="Define a author">
<input type="submit" value="Create">
</form>


@endsection
