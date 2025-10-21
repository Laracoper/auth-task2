@extends('inc.layout')

@section('title')

@section('content')
<div class="container">
    <h1>login</h1>
    <div class="col-md-6 offset-md-3">
        <form action="{{ route('login.store') }}" method="post">
            @csrf
           
            <div class="mb-3">
                <input type="email" class="form-control mb-1 @error('email') is-invalid @enderror" placeholder="email" name="email">
                @error('email')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control mb-1 @error('password') is-invalid @enderror" placeholder="password" name="password">
                @error('password')
               <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">login</button>
        </form>
    </div>
</div>
@endsection