@extends('layouts.app')

@section('content')
    
    <h1>Show to-do</h1>
    
    <p>{{ $todo->title }}</p>

    <p>{{ $todo->body }}</p>

@endsection