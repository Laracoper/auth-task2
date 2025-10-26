@extends('inc.layout')

@section('title','user')

@section('content')
<h1 class="mb-5">Пользователь </h1>

<div class="col-md-6 offset-md-3">

    <form action="{{ route('store-msg') }}" method="post">
        @csrf

        <div class="mb-3">
            <input type="text" class="form-control mb-1 @error('message') is-invalid @enderror" placeholder="ваше сообщение" name="message">
            @error('message')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <input type="text" class="form-control mb-3 @error('user_id') is-invalid @enderror" value="{{ Auth::user()->id }}" name="user_id">
        <p>выбрать кому отправить</p>
        <select name="addresat_id" class="form-control mb-3">

            @foreach ($el as $item)

            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="btn btn-info">отправить</button>
    </form>
</div>



@endsection