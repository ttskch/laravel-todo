<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * @Get("/", as="todo_index")
     */
    public function index()
    {
        $todos = DB::select('select * from todos');

        return view('todo.index', [
            'todos' => $todos,
        ]);
    }
}
