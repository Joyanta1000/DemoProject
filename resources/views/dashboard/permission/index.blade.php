@extends('dashboard.layouts.defaults.app')

@section('content')
@can('permission.index')



<table class="table data table-bordered datatable" id="table-3">
    <thead>
        <tr class="replace-inputs">
            <th>#</th>
            <th>Name</th>
            <th>Action(s)</th>
        </tr>
    </thead>
    <tbody>
        @foreach($permissions as $permission)
        <tr >
            <td >{{$permission->id}}</td>
            <td >{{$permission->name}}</td>
            <td ><a href="#" class="btn btn-default btn-sm btn-icon icon-left edit">
                    <i class="entypo-pencil"></i>
                    Edit
                </a>

                 <a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
                    <i class="entypo-block "></i>
                    Delete
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Action(s)</th>
        </tr>
    </tfoot>
</table>

@endcan
@endsection