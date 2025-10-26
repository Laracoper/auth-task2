<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CharController;

class HomeController extends Controller
{

    public function index()
    {
        $char = CharController::char('', 'a', 'ов');
        $count = Task::count('id');
        // $user = Auth::user();

        $userstask = DB::table('users')
            ->join('tasks', 'users.id', '=', 'tasks.user_id')
            ->select('users.id','users.name', 'tasks.*')
            ->get();
        dump($userstask);
        // $tasks = User::find($user->id)->tasks; //belongsTo

        // dump($tasks);

        // $users = User::with('tasks')->get();
        // $users = User::all();
        // dd($users);
        return view('index', compact('userstask', ['count', 'char']));
    }
    public function home()
    {
        // $char = CharController::char('ь', 'и', 'ей');
        // // // dd($character);
        $user = Auth::user();
        $tasks = User::find($user->id)->tasks;
        // $count = User::find($user->id)->tasks->count();

        // // $tasks = User::with('tasks')->get();
        // // dump($tasks);
        // // dd($user->id);
        // $task = Task::find($user->id);


        // // $usertaskname = $task->user->name;

        // return view('secret', compact(['user', ['tasks', 'count', 'char']]));
        return view('secret',compact('tasks'));
      
    }

    
}
