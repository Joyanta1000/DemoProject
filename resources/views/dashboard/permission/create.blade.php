@extends('dashboard.layouts.defaults.app')

@section('content')
@can('role.create')
<div class="row">
    <div class="col-md-12">

        @include('sweetalert::alert')
        <!-- error messages -->
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="panel panel-primary" data-collapsed="0">

            <div class="panel-heading">
                <div class="panel-title">
                    Create Permission
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                    <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
                    <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
                </div>
            </div>

            <div class="panel-body">

                <form role="form" action="{{route('permission.store')}}" method="POST" class="form-horizontal form-groups-bordered">
                    @csrf
                    @method('POST')
                    <div class="form-group">
                        <label for="field-1" class="col-sm-3 control-label">Permission</label>

                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" id="field-1" placeholder="Create Permission" value="{{old('name')}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-5">
                            <button type="submit" class="btn btn-default">Create</button>
                        </div>
                    </div>

                </form>

            </div>

        </div>

    </div>
</div>
@endcan
@endsection