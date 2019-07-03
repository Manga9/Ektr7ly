@extends('admin.layouts.master')

@section('head')
    <link rel="stylesheet" href="{{ asset ('../admin/css/dataTables.bootstrap.min.css')}}">
@endsection
@section('title', 'Admin|Admins-List')


@section('content')

<div class="content-wrapper">
    <section class="content">
        <div class="row">
        <div class="col-xs-12">
            <div class="box">
            <div class="box-header">
                <h3 class="box-title">Admins Table</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Last Film Mood</th>
                    <th>Controls</th>
                </tr>
                </thead>
                <tbody>
                @foreach($admins as $admin)
                <tr>
                    <td>{{$loop->index+1}}</td>
                    <td>{{$admin->name}}</td>
                    <td>{{$admin->email}}</td>
                    @if ($admin->mood == '')
                        <td>nothing</td>
                        @else
                        <td>$admin->mood</td>
                    @endif
                    <td>
                        <a href="{{route('admins.edit', $admin->id)}}"><button type='submit' class='btn btn-info'>Edit</button></a>
                        <form id="delete-form-{{$admin->id}}" style="display:none" method="POST" action="{{ route('admins.destroy', $admin->id) }}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        </form>
                        <a href='{{route("admins.index")}}' class='btn btn-danger' onClick="
                        if(confirm('Are you sure to delete this ?'))
                        {
                            event.preventDefault();document.getElementById('delete-form-{{ $admin->id }}').submit();
                        } else {
                            event.parentDefault();
                            }"
                        > Delete </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
                </table>
                <a href="{{route('admins.create')}}"><button type='submit' class='btn btn-info'>Add Admin</button></a>
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
