@extends('layouts.default')
@section('content')
  <div class="offset-md-2 col-md-8">
    <div class="card ">
      <div class="card-header">
        <h5>登录</h5>
      </div>
      <div class="card-body">
        @include('shared._errors')
        <form action="{{route("login")}}" method="post">
          {{ csrf_field() }}

          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="email" id="email" name="email" class="form-control" value="{{old("email")}}">
          </div>
          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" id="password" name="password" class="form-control" value="{{old("password")}}">
          </div>
          <div class="form-group">
            <label for="test">测试：</label>
            <input type="text" id="password" name="test" class="form-control" value="{{old("password")}}">
          </div>
          <button type="submit" class="btn btn-primary">登录</button>
        </form>
        <hr>
        <p>还没账号？<a href="{{ route('signup') }}">现在注册！</a></p>
      </div>
    </div>
  </div>
@endsection
