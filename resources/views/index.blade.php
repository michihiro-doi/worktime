@extends('layouts.app')
@section('content')
    <div class="justify-content-center">
        <div class="card row">
            <div class="card-header">勤怠アプリ</div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-4">
                        <a  href="/store" class="btn-lg btn-primary">スタッフ追加</a>
                    </div>
                    <div class="col-4">
                        <a  href="/record" class="btn-lg btn-primary">勤怠管理</a>
                    </div>
                    <div class="col-4">
                        <a  href="/data" class="btn-lg btn-primary">出勤記録</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection