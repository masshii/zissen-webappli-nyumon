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

    public function edit(Request $request)
    {
        $todos = Todo::find($request->id);

        return view('index', ['todos' => $todos]);
    }

    public function update(Request $request,$id)
    {
        $title = $request->input('content');
        $todo = Todo::find($id);
        $todo->title=$title;
        $todo->save();
        $todos = Todo::all();
        
        return view('index', ['todos' => $todos]);
    }

    public function delete(Request $request,$id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        $todos = Todo::all();

        return view('index', ['todos' => $todos]);
    }

    public function remove(Request $request)
    {
        Todos::find($request->id)->delete();
        
        return redirect('/');
    }
}    