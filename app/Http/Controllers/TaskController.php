<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function store(){
        $val = request()->validate([
            'title'=>['required'],
            'text'=>['required'],
            'user_id'=>['required']
        ]);
        Task::create($val);
        // dump(request());
        return redirect()->route('secret')->with('success','created task');
    }
}
