@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <div class="card row">
            <div class="card-header">スタッフ追加</div>
            <div class="card-body">
            @isset($employees)
                @foreach($employees as $employee)
                    <p>{{$employee->name}}</p>
                @endforeach
            @endisset
                <form action="/employee" method="POST">
                <input type="text" name="name" placeholder="スタッフの名前を入力">
                <button type="submit">追加</button>
                </form>
            </div>
        </div>
    </div>
@endsection