@extends('layout.layout')

@section('content')

<form action="/user" method="POST">
@csrf
<input type="email" name="email" placeholder="Enter your email">
<input type="submit" value="Login">
</form>
@endsection

