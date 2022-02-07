@extends('layouts.app')
@section('title','编辑资料')
@section('content')
  <div class="container">
    <div class="col-md-8 offset-md-2">
      <div class="card">
        <div class="card-header">
          <h4>
            <i class="glyphicon glyphicon-edit"></i>编辑个人资料
          </h4>
        </div>
        <div class="card-body">
          <form action="{{route('users.update',$user->id)}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">
            {{csrf_field()}}
            @include('shared._error')
            <div class="form-group">
              <label for="name-field">用户名</label>
              <input type="text" name="name" id="name-field" class="form-control" value="{{old('name',$user->name)}}">
            </div>

            <div class="form-group">
              <label for="email-field">邮箱</label>
              <input type="text" name="email" id="email-field" class="form-control" value="{{old('email',$user->email)}}">
            </div>

            <div class="form-group">
              <label for="introduction-field">个人简介</label>
              <textarea class="form-control" name="introduction" id="introduction-field" rows="3">{{old('introduction',$user->introduction)}}</textarea>
            </div>

            <div class="form-group mb-4">
              <label for="avatar-field" class="avatar-label">
                用户头像
              </label>
              <input type="file" name="avatar" id="avatar-field" class="form-control-file" >
              @if($user->avatar)
              <br>
              <img src="{{$user->avatar}}" width="200" class="thumbnail img-responsive">
              @endif
            </div>
            <div class="well well-sm">
              <button type="submit" class="btn btn-primary">
                保存
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@stop
