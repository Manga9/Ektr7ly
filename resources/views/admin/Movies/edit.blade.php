@extends('admin.layouts.master')
@section('title', 'Admin|Movies-edit')
@section('head')
<link rel="stylesheet" href="{{ asset ('../admin/css/select2.min.css')}}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Add New Movie</h3>
            @include('admin.layouts.message')
        </div>
        <form class="form-horizontal" method="POST" action="{{route('movies.update', $movie->id)}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="box-body">
                <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                    <input type="text" name='name' value="{{$movie->name}}" class="form-control" id="inputName" placeholder="Name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputDisc" class="col-sm-2 control-label">Disc</label>

                    <div class="col-sm-8">
                        <textarea name='disc' class="form-control" id="inputDisc" placeholder="DISC"> {{$movie->disc}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label for="movieImg" class='col-sm-2 control-label'>Movie Image</label>
                    <div class="col-sm-8">
                        <input type="file" id="movieImg" name='img'>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputRate" class="col-sm-2 control-label">Rate</label>

                    <div class="col-sm-8">
                    <input type="number" name='rate' class="form-control" id="inputRate" placeholder="Rate" value="{{$movie->rate}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputLink" class="col-sm-2 control-label">Link</label>

                    <div class="col-sm-8">
                    <input type="text" name='link' class="form-control" id="inputLink" placeholder="Link To Watch" value="{{$movie->link}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-8">
                        <select class="form-control select2 select2-hidden-accessible" style="width:100%" multiple="" data-placeholder="Choose Movie Category" tabindex="-1" aria-hidden="true" name='cats[]'>
                            @foreach($categories as $cat)
                                <option value="{{$cat->id}}"
                                    @foreach($movie->categories as $m_cat)
                                        @if($m_cat->id == $cat->id)
                                            selected
                                        @endif
                                    @endforeach
                                >{{ $cat->name }}</option>
                            @endforeach
                        </select>
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

@section('footer')
<script src="{{ asset ('../admin/js/select2.full.min.js')}}"></script>
<script>
    $(function () {
        $('.select2').select2();
    });
</script>
@endsection
