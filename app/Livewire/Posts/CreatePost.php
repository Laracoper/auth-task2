<?php

namespace App\Livewire\Posts;

use App\Http\Controllers\CharController;
use App\Models\Task;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class CreatePost extends Component
{
    public $title;
    public $text;
    public $user_id;
    public $user;
    public $count;
    // public $name = 'alexey';
    public function save()
    {
        // dump($this);
        $user = Auth::user();
        $this->count = User::find($user->id)->tasks->count();

        // dump($user->id);
        $this->user_id = $user->id;

        $val = $this->validate([
            'title' => ['required'],
            'text' => ['required'],
            'user_id' => ['required']
        ]);
        // dump($val);
        Task::create($val);
        $this->reset();
    }

    // public function mount(){

    // }

    public function render()
    {
        return view('livewire.posts.create-post')->with([
            // 'name' => $this->user->name,
            'user_id' => $this->user_id
        ]);
    }
}
