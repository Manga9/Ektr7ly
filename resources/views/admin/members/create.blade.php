@extends('admin.layouts.master')
@section('title', 'Admin|Member-create')


@section('content')
<div class="content-wrapper">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add New Member</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{route('members.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                    <input type="text" name='name' class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                    <input type="email" name='email' class="form-control" id="inputEmail3" placeholder="Email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                    <input type="password" name='password' class="form-control" id="inputPassword3" placeholder="Password">
                    </div>
                </div>
            </div>
            <div class="box-footer">
            <button type="submit" class="btn btn-info text-center">Add</button>
            </div>
        </form>
    </div>
</div>
@endsection
