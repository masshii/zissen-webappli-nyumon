<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todos = Todo::all();

        return view('index', ['todos' => $todos]);
    }

    public function create(Request $request)
    {
        $title = $request->input('content');
        $todo = new Todo();
        $todo->title=$title;
        $todo->save();
        $todos = Todo::all();
        
        return view('index', ['todos' => $todos]);
    }

    public function update(Request $request)
    {
        $todos = Todo::all();
        $todo->title=$title;
        $todo->save();

        return view('index', ['todos' => $todos]);
    }

    public function delete(Request $request)
    {
        $todos = Todo::all();
        $todo->delete();

        return view('index', ['todos' => $todos]);
    }

}    