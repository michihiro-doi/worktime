@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <div class="card row">
            <div class="card-header">スタッフ追加</div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <form action="/employees" method="POST">
                        @csrf
                        <input type="text" name="name" placeholder="スタッフの名前を入力">
                        <button type="submit">追加</button>
                        </li>
                        </form>
                    </li>
                    @isset($employees)
                    @foreach($employees as $employee)
                    <li class="list-group-item">
                        <form action="/employees/{{$employee->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        {{$employee->name}}
                        <button type="submit">削除</button>
                        </form>
                    </li>
                    @endforeach
                @endisset
            </div>
        </div>
    </div>
@endsection