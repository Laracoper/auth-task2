<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use App\Models\Msg;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use User as GlobalUser;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function show(User $user)
    {
        $users = DB::table('users')
            ->join('tasks', 'users.id', '=', 'tasks.user_id')
            ->select('users.*', 'tasks.*')
            ->get();
        dump($users);
        foreach ($users as $user) {
            // dump($user);
            $task = Task::find($user->id);

            $user = $task->user->name;
            // dump($user);
        }
        $el = User::all();

        return view('users.show', compact('user', ['el']));
    }

    public function store()
    {
        //   dd(request());
        $val = request()->validate([
            'message' => ['required'],
            'user_id' => ['required'],

        ]);
        Msg::create($val);
        return redirect()->back()->with('success', 'messages ok');
    }
}
