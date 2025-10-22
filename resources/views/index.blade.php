@extends('inc.layout')

@section('title')

@section('content')
<h1 class="mb-5">Главная страница</h1>


<!-- @foreach ($users as $user)
@foreach ($user->tasks as $task)
<p>{{ $task->user->name }}</p>
@endforeach
@endforeach -->
@auth
<!-- <h3 class="mb-3">Все зарегестрированные пользователи</h3>
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
</div> -->


@endauth

<h3>всего <span class="text-primary">{{ $count }}</span> постов</h3>

<div class="cards d-flex gap-2 flex-wrap justify-content-between">
    @foreach ($userstask as $user)
    <div class="card" style="width:30%;">
        <div class="card-body">
            <div class="card-title">
                <h3>{{ $user->title }}</h3>
            </div>
            <div class="card-text">
                <p>{{ $user->text }}</p>               
                <p>автор: {{ $user->name }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection