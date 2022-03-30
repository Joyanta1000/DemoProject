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
        <tr class="odd gradeX">
            <td class="data" id="id">{{$permission->id}}</td>
            <td class="data" id="name">{{$permission->name}}</td>
            <td ><a href="#" class="btn btn-default btn-sm btn-icon icon-left edit">
                    <i class="entypo-pencil"></i>
                    Edit
                </a>

                <a href="#" class="btn btn-success btn-sm btn-icon icon-left save">
                    <i class="entypo-cancel"></i>
                    Save
                </a>

                <!-- <a href="#" class="btn btn-info btn-sm btn-icon icon-left">
                    <i class="entypo-info"></i>
                    Profile
                </a> -->
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