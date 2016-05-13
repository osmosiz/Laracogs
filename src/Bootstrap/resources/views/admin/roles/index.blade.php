@extends('dashboard')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <form id="" class="pull-right raw-margin-top-24 raw-margin-left-24" method="post" action="/admin/roles/search">
                {!! csrf_field() !!}
                <input class="form-control" name="search" placeholder="Search">
            </form>
            <a class="btn btn-default pull-right raw-margin-top-24" href="{{ url('admin/roles/create') }}">Create New Role</a>
            <h1>Role Admin</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped raw-margin-top-24">

                <thead>
                    <th>Name</th>
                    <th>Label</th>
                    <th class="text-right">Actions</th>
                </thead>
                <tbody>
                    @foreach($roles as $role)
                        <tr>
                            <td>{{ $role->name }}</td>
                            <td>{{ $role->label }}</td>
                            <td>
                                <a class="btn btn-danger btn-xs raw-margin-left-16 pull-right" href="{{ url('admin/roles/'.$role->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete this role?')"><span class="fa fa-edit"></span> Delete</a>
                                <a class="btn btn-warning btn-xs pull-right" href="{{ url('admin/roles/'.$role->id.'/edit') }}"><span class="fa fa-edit"></span> Edit</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>

@stop
