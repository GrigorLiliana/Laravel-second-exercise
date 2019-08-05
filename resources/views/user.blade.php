@extends('layout.layout')

@section('title')
{{$result->firstname}}
@endsection

@section('content')
@if(!empty($result))


    <div>
    <h2>User details:</h2>
    <ul>
    <li>First Name: {{ $result->firstname}} </li>
    <li>First Name: {{ $result->lastname }} </li>
    <li>E-mail: {{ $result->email }} </li>
    </ul>
    </div>
    <hr>

@endif
@endsection

