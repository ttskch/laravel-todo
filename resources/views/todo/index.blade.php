@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach ($todos as $todo)
            @if ($todo->isDone)
                <li class="list-group-item bg-light">
                    <form action="{{ route('todo_edit', ['id' => $todo->id]) }}" method="post" class="d-inline mr-2">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="isDone" value="0">
                        <button class="btn btn-outline-secondary btn-sm"><i class="fa fa-undo"></i></button>
                    </form>
                    <s class="text-muted">{{ $todo->name }}</s>
                </li>
            @else
                <li class="list-group-item">
                    <form action="{{ route('todo_edit', ['id' => $todo->id]) }}" method="post" class="d-inline mr-2">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="isDone" value="1">
                        <button class="btn btn-outline-secondary btn-sm"><i class="fa fa-check"></i></button>
                    </form>
                    {{ $todo->name }}
                </li>
            @endif
        @endforeach

        <li class="list-group-item px-3">
            <form action="{{ route('todo_new') }}" method="post">
                @csrf
                <div class="input-group">
                    <input type="text" name="name" class="form-control" required>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-outline-secondary"><i class="fa fa-plus"></i> Add</button>
                    </div>
                </div>
            </form>
            @if ($errors->any())
                <div class="alert alert-danger mt-3 mb-0">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </li>
    </ul>
@endsection
