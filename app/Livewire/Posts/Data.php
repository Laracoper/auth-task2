<?php

namespace App\Livewire\Posts;

use App\Http\Controllers\CharController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class Data extends Component
{

    public $user;
    public $tasks;
    public $count;

    public $char;
    public function render()
    {
        $user = Auth::user();
        $this->user = Auth::user();
        $this->tasks = User::find($user->id)->tasks;
        $this->count = User::find($user->id)->tasks->count();
        $this->char = CharController::char('ь', 'и', 'ей');

        return view('livewire.posts.data')->with([
            'char' => $this->char,
            'user' => $this->user,
            'tasks' => $this->tasks,
            'count' => $this->count
        ]);
    }
}
