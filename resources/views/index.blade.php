@extends('inc.layout')

@section('title')

@section('content')
<h1 class="mb-5">Главная страница</h1>



{{-- @foreach ($users as $user)
@foreach ($user->tasks as $task)
<p>{{ $task->user->name }}</p>
@endforeach
@endforeach --}}



{{-- <h3 class="mb-3">Все зарегестрированные пользователи</h3>
<div class="cards d-flex flex-column gap-1 gap-md-3">
    @foreach ($users as $user)
    <div class="card">

        <div class="card-body">
            <div class="card-title">
                <h6>идентификатор: {{ $user->id }}</h6>
</div>
<div class="card-text">
    <p>имя: {{ $user->name }}</p>
    <p>почта: {{ $user->email }}</p>
    <p>автор: {{ $user->name }}</p>
</div>

</div>

</div>

@endforeach
</div> --}}




<h3>всего <span class="text-primary">{{ $count }}</span> пост{{ $char }}</h3>

<div class="row">
    <div class="col-md-12">
        <div class="cards d-flex gap-2 flex-wrap justify-content-between">
            @foreach ($userstask as $user)
            <div class="card" style="width:20rem;">
                <div class="card-body">
                    <div class="card-title">
                        <h5>{{ $user->title }}</h5>
                    </div>
                    <div class="card-text">
                        <p>id таска: {{ $user->id }}</p>
                        <p>user_id: {{ $user->user_id }}</p>
                        <p>{{ $user->text }}</p>
                        <p>автор: {{ $user->name }}</p>
                        <p><a href="{{ route('show',[$user->id]) }}">отправить сообщение</a></p>

                       
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection