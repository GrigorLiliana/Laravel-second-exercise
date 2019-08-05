@extends('layout.layout')
@section('title', 'Users Page')
@section('content')
@if(!empty($results))

    @foreach($results as $value)
    <div>
    <ul>
    <li>First Name: {{ $value->firstname }} </li>
    <li>First Name: {{ $value->lastname }} </li>
    <li>E-mail: {{ $value->email }} </li>
    </ul>
    </div>
    <hr>
    @endforeach
@endif
@endsection

