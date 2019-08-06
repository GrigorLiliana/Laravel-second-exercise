@extends('layout.layout')
@section('title', 'Article Details')
@section('content')
@if(!empty($article))


    <div>
    <ul>
    <li>First Name: {{ $article->title }} </li>
    <li>First Name: {{ $article->description }} </li>
    </ul>
    </div>
    <hr>


@endif
<button><a href="/articles">Back</a></button>
@endsection

