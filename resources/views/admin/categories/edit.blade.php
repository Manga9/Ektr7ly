@extends('admin.layouts.master')
@section('title', 'Admin|category-edit')


@section('content')
<div class="content-wrapper">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Edit {{ $cat->name }} Category</h3>
        </div>
        <form class="form-horizontal" method="POST" action="{{route('categories.update', $cat->id)}}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                    <input type="text" name='name' value="{{$cat->name}}" class="form-control" id="inputName" placeholder="Name">
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
