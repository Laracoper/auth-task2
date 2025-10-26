@extends('inc.layout')

@section('title')

@section('content')
<h3>Secret page</h3>

{{-- 
<p class="fw-bolder fs-3 text-primary">Welcome {{ $user->name }}</p> 

<p>всего у вас {{ $count }} запис{{$char}}</p>
--}}

<livewire:posts.data></livewire:posts.data>


<!-- тут форма -->
 {{--  @livewire('posts.create-post') --}}
<livewire:posts.create-post ></livewire:posts.create-post>  

 
    {{--     <form action="{{ route('task.store') }}" method="post">
        @csrf
        <input type="text" name="title" placeholder="title" class="form-control mb-3 @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="text" placeholder="text" class="form-control mb-3 @error('text') is-invalid @enderror" value="{{ old('text') }}">
        @error('text')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="text" name="user_id" placeholder="" class="form-control mb-3 @error('user_id') is-invalid @enderror" value="{{ Auth::user()->id }}" readonly>
        @error('user_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <button wire:click="send" type="submit" class="btn btn-info">create</button>
    </form> --}}


    
    <div class="cards gap-1 gap-md-3 d-flex flex-column mt-5">
    @foreach ($tasks as $task)
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                <h6>title: {{ $task->title }}</h6>
            </div>
            <div class="card-text">
                <p>description: {{ $task->text }}</p>
                <p>id: {{ $task->id }}</p>
            </div>
        </div>
    </div>

    @endforeach
</div>
    


@endsection