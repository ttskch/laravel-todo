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
        return 'test';
    }
}
