@extends('admin.layouts.master')

@section('head')
    <link rel="stylesheet" href="{{ asset ('../admin/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('title', 'Admin|Movies-List')


@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Movies Table</h3>
                @include('admin.layouts.message')
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Category</th>
                    <td>Rate</td>
                    <th>Link</th>
                    <th>Controls</th>
                </tr>
                </thead>
                <tbody>
                @foreach($movies as $movie)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$movie->name}}</td>
                    <td>
                        @foreach($movie->categories as $m_cat)
                             {{$m_cat->name}},
                        @endforeach
                    </td>
                    <td>{{$movie->rate}}</td>
                    <td>{{$movie->link}}</td>
                    <td>
                        <a style='margin-right: 5px; display: inline-block;' href="{{route('movies.edit', $movie->id)}}"><i class='fa fa-edit'></i></a>
                        <form id="delete-form-{{$movie->id}}" style="display:none" method="POST" action="{{ route('movies.destroy', $movie->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        </form>
                        <a href='{{route("movies.index")}}' onClick="
                        if(confirm('Are you sure to delete this ?'))
                        {
                            event.preventDefault();document.getElementById('delete-form-{{ $movie->id }}').submit();
                        } else {
                            event.parentDefault();
                            }"
                        > <i class='fa fa-remove'></i></a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <a href="{{route('movies.create')}}"><button type='submit' class='btn btn-info'>Add Movie</button></a>
            </div>
            </div>
        </div>
        </div>
    </section>
</div>

@endsection

@section('footer')
    <script src="{{ asset ('../admin/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ asset ('../admin/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
            })
        })
    </script>
@endsection
