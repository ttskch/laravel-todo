<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Collective\Annotations\Routing\Annotations\Annotations\Middleware;
use Collective\Annotations\Routing\Annotations\Annotations\Patch;
use Collective\Annotations\Routing\Annotations\Annotations\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    /**
     * @Get("/", as="todo_index")
     * @Middleware("web")
     */
    public function index()
    {
        $todos = DB::select('select * from todos');

        return view('todo.index', [
            'todos' => $todos,
        ]);
    }

    /**
     * @Post("/new", as="todo_new")
     * @Middleware("web")
     */
    public function new(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        DB::insert('insert into todos (name, isDone) values (?, ?)', [$validatedData['name'], 0]);

        return redirect(route('todo_index'));
    }

    /**
     * @Patch("/{id}/edit", as="todo_edit")
     * @Middleware("web")
     */
    public function edit(Request $request, string $id)
    {
        DB::update('update todos set isDone = ? where id = ?', [(boolean) $request->get('isDone'), $id]);

        return redirect(route('todo_index'));
    }
}
