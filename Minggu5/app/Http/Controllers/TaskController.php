<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    
    public function index(){
        $tasks = Task::all();
        //$tasks = DB::table('task')->get();
        return view('task.index',compact('tasks'));
    }
    public function create(){
        return view('task.create');
     }

    public function store(TaskRequest $request){
        $validatedData =$request->validated();
        Task::create($validatedData);
        return redirect('/task');
    }

     public function show(Task $task){
        return view('task.show',compact('task'));
    }
    public function edit($id){
        $task = Task::find($id);
        return view('task.edit',compact('task'));
     }
     public function delete(Task $task){
        $task->delete();
        return redirect('/task');
     }

     public function update(TaskRequest $request){
        $validatedData =$request->validated();
        Task::where('id', $request['id'])->update($validatedData);
        return redirect('/task');
    }
}
