@extends('layout.layout')
@section('title', 'Articles List')
@section('content')
@if(!empty($articles))

    @foreach($articles as $value)
    <div>
    <ul>
    <li>First Name: {{ $value->title }} </li>
    <li>First Name: {{ $value->description }} </li>
    <button><a href="/article/{{$value->id}}">See Details</a></button>
    </ul>
    </div>
    <hr>
    @endforeach
@endif
@endsection

