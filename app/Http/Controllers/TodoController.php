<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;

class TodoController extends Controller
{
    /**
     * @Get("/", as="todo_index")
     */
    public function index()
    {
        return view('todo.index', [
            'todos' => [
                ['name' => 'todo1', 'isDone' => false],
                ['name' => 'todo2', 'isDone' => false],
                ['name' => 'todo3', 'isDone' => false],
            ],
        ]);
    }
}
