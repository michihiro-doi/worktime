@extends('layouts.app')
@section('content')
<div class="container justify-content-center">
  <h4>{{$employee->name}}さんの勤怠</h4>
    <div class="row">
        <div class="col-6">
            <form action="/record/record/{{$employee->id}}" method="POST">
            @csrf
                <input name="start" value="出勤" type="submit" class="border-white btn btn-primary container" style="height:150px;">
            </form>
        </div>
        <div class="col-6">
            <form action="/record/record/{{$employee->id}}" method="POST">
            @csrf
                <input name="end" value="退勤" type="submit" class="border-white btn btn-primary container" style="height:150px;">
            </form>
        </div>
        <div class="col-6">
            <form action="/record/record/{{$employee->id}}" method="POST">
            @csrf
                <input name="rest" value="休憩" type="submit" class="border-white btn btn-primary container" style="height:150px;">
            </div>
            <div class="col-6">
                <input name="return" value="復帰" type="submit" class="border-white btn btn-primary container" style="height:150px;">
            </form>
        </div>
    </div>
    <div class="row">
      <table class='mt-5 table'>
        <tbody>
          <tr>
            <th>出勤</th>
            <td>start</td>
          </tr>
          <tr>
            <th>休憩</th>
            <td>rest</td>
          </tr>
          <tr>
            <th>復帰</th>
            <td>return</td>
          </tr>
          <tr>
            <th>退勤</th>
            <td>end</td>
          </tr>
        </tbody>
      </table>
    </div>
</div>
@endsection