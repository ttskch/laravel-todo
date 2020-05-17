@extends('layouts.app')

@section('content')
    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo->name }} {{ $todo->isDone ? 'done' : 'undone' }}</li>
        @endforeach
    </ul>

    <form action="{{ route('todo_new') }}" method="post">
        @csrf
        <input type="text" name="name" required>
        <button type="submit">Add</button>
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
