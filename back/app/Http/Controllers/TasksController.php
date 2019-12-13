<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index (){
        return Task::all();
    }

    public function store (Request $request){
       $tasks= new Task();
       $tasks->description=$request->input('description');
       $tasks->save();
       
       return 200;
    }

    public function show($id){
        return Task::findOrFail($id);
    }

    public function update (Request $request, $id){
       $tasks= Task::findOrFail($id);
       $tasks->description=$request->input('description');
       $tasks->done=$request->input('done');
       $tasks->save();
       
       return 200; 
    }

    public function destroy ($id){
       $tasks= Task::findOrFail($id);
       $tasks->delete();
       
       return 200; 
    }
}
