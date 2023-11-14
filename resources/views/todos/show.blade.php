@extends('layouts.myApp')

@section('content')
    
<div class='dark:text-white m-5'>
    <h1 class='text-3xl font-bold'>Show to-do</h1>
    
    <p>{{ $todo->title }}</p>
    <p>{{ $todo->body }}</p>
    <p>{{ $todo->user->name }}</p>

    <div>
        <a href="{{ route('todos.edit', $todo->id)}}">Edit</a>

        <form method='POST' action='{{ route('todos.destroy', $todo->id)}}'>
            @csrf
            @method('DELETE')
            <button type='submit'>Delete</button>
        </form>
    </div>
</div>
@endsection