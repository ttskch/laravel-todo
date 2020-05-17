@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->name }} {{ $todo->isDone ? 'done' : 'undone' }}</li>
        @endforeach
    </ul>
@endsection
