@extends('dashboard.layouts.defaults.app')

@section('content')
    @can('role.index')
        <table class="table data table-bordered datatable" id="table-3">
            <thead>
                <tr class="replace-inputs">
                    <th>#</th>
                    <th>Name</th>
                    <th>Permission</th>
                    <th>Action(s)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            @foreach ($role->permissions as $permission)
                                <span class="label label-success">{{ $permission->name }}</span>
                            @endforeach
                        </td>
                        <td><a href="#" class="btn btn-default btn-sm btn-icon icon-left edit">
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
                    <th>Permission</th>
                    <th>Action(s)</th>
                </tr>
            </tfoot>
        </table>
    @endcan
@endsection
