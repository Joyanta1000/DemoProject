@extends('dashboard.layouts.defaults.app')

@section('content')
    @can('role.index')
        <table class="table data table-bordered datatable" id="table-3">
            <thead>
                <tr class="replace-inputs">
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action(s)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <span class="label label-success">{{ $role->name }}</span>
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
                    <th>Email</th>
                    <th>Roles</th>
                    <th>Action(s)</th>
                </tr>
            </tfoot>
        </table>
    @endcan
@endsection
