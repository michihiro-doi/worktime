@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <div class="card row">
            <div class="card-header">シフト管理</div>
            <div class="card-body row">
            @isset($employees)
                    @foreach($employees as $employee)
                        <a href="record/record/{{$employee->id}}" class="pt-5 border-white btn btn-primary container col-4" style="height:150px;"><span class="h1">{{$employee->name}}</span></a>
                    @endforeach
                    @endisset
                </div>
        </div>
    </div>
@endsection