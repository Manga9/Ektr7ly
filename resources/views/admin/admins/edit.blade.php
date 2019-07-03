@extends('admin.layouts.master')
@section('title', 'Admin|Admin-edit')


@section('content')
<div class="content-wrapper">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Edit Admin</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{route('admins.update', $admin->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                    <input type="text" name='name' value="{{$admin->name}}" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                    <input type="email" name='email' value="{{$admin->email}}" class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group" style='display: none'>
                    <div class="col-sm-10">
                        <input type="hidden" name='oldPassword' class="form-control" value="{{$admin->password}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="password" name='newPassword' class="form-control" id="inputPassword3">
                    </div>
                </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-info text-center">Edit</button>
            </div>
        </form>
    </div>
</div>
@endsection
