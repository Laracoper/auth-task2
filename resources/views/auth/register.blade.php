@extends('inc.layout')

@section('title')

@section('content')
<div class="container">
    <h1>register</h1>
    <div class="col-md-6 offset-md-3">
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="name" name="name">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email">
                @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password">
                @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-info">register</button>
        </form>
    </div>
</div>
@endsection