<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class TaskController extends Controller
{

    public function dashboard(){
        $allTasked = Task::latest()->get();
        return view('dashboard', ['tasks' => $allTasked]);
    }
    public function completed(){
       return view('layouts.task');
    }

    public function today(){
        $allTasked = Task::latest()->get();
        return view('layouts.today', ['tasks' => $allTasked]);
    }

    public function store(Request $request){
        $requestValidated = $request->only(['task_number', 'title', 'description', 'category']);

        $task = new Task;
        $task->fill($requestValidated);
        $task->save();

        // Redirect back to the previous page
        return redirect()->back()->with(['success'=>'Task created successfully', 'status'=>true]);
    }
}
