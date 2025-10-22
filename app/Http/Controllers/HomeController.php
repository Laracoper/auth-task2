<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $count = Task::count('id');
        // $user = Auth::user();

        $userstask = DB::table('users')
            ->join('tasks', 'users.id', '=', 'tasks.user_id')
            ->select('users.*', 'tasks.*')
            ->get();
        dump($userstask);
        // $tasks = User::find($user->id)->tasks; //belongsTo

        // dump($tasks);
 
        $users = User::with('tasks')->get();
        // $users = User::all();
        // dd($users);
        return view('index', compact('users', ['userstask','count']));
    }
    public function home()
    {
        $user = Auth::user();
        $tasks = User::find($user->id)->tasks;
        $count = User::find($user->id)->tasks->count();
        // $tasks = User::with('tasks')->get();
        // dump($tasks);
        // dd($user->id);
        $task = Task::find($user->id);
        $char = $this->char();
        // dd($char);
        // $usertaskname = $task->user->name;
        return view('secret', compact(['user', ['tasks', 'count', 'char']]));
    }

    private $character;
    private $data = ['ь', 'и', 'ей'];
    private function char()
    {
        // $count = Task::count('id');
        $count = User::find(Auth::user()->id)->tasks->count();
        // dd($count);
        // $count = 67867;
        $count = substr($count, -1);
        // dd($count);
        if ($count == 1) {
            $this->character = $this->data[0];
        }
        if ($count > 1 && $count < 5) {
            $this->character = $this->data[1];
        }
        if ($count >= 5 || $count == 0) {
            $this->character = $this->data[2];
        }
        $ch = $this->character;
        return $ch;
    }
}
