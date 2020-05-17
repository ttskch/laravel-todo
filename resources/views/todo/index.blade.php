@extends('layouts.app')

@section('content')
    <ul class="list-group">
        @foreach ($todos as $todo)
            <li class="list-group-item">
                @if ($todo->isDone)
                    <s class="text-muted">{{ $todo->name }}</s>
                    <span class="badge badge-success float-right">Done</span>
                @else
                    {{ $todo->name }}
                @endif
            </li>
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
