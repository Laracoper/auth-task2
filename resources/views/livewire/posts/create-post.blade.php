<div>
    {{-- The whole world belongs to you. --}}
    <form wire:submit="save" method="post">
        @csrf
        <input type="text" wire:model="title" placeholder="title" class="form-control mb-3 @error('title') is-invalid @enderror" value="{{ old('title') }}">
        @error('title')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="text" wire:model="text" placeholder="text" class="form-control mb-3 @error('text') is-invalid @enderror" value="{{ old('text') }}">
        @error('text')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <input type="text" wire:model="user_id" placeholder="" class="form-control mb-3 @error('user_id') is-invalid @enderror" value="{{ Auth::user()->id }}">
        @error('user_id')
        <p class="text-danger">{{ $message }}</p>
        @enderror
        <button  type="submit" class="btn btn-info">create</button>
    </form>

    {{-- <h1>{{ $name }}</h1> --}}
{{-- 
  <form action="{{ route('task.store') }}" method="post">
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
    </form>
--}}

    
</div>