<?php

namespace App\Http\Controllers;

use Collective\Annotations\Routing\Annotations\Annotations\Get;
use Illuminate\Routing\Controller as BaseController;

class TodoController extends BaseController
{
    /**
     * @Get("/", as="todo_index")
     */
    public function index()
    {
        return 'test';
    }
}
