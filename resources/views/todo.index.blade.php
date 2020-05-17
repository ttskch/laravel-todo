@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo['name'] }}</li>
        @endforeach
    </ul>
@endsection
