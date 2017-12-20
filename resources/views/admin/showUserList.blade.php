@extends('main')
@section('title','User List')
@section('nav')
    @include('partials.admin._nav')
@endsection
@section('nav')
    @include('partials.admin._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.admin.topbar')
            <div class="col-lg-offset-2 col-sm-9 col-md-8 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:white;background-color:#02675e">
                        <h3 class="panel-title" align="center">User List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Username</th>
                                <th class="text-center">Date registered</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td class="text-center">{{$user->name}}</td>
                                    <td class="text-center">{{$user->created_at}}</td>
                                    <td class="text-center">Job Seeker</td>
                                    @if($user->status)
                                        <td class="text-center">
                                            <span class="label-success label label-default">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-danger action-btn" href="{{route('admin.banUser',$user->id)}}">
                                                <i class="glyphicon glyphicon-lock icon-white"></i>
                                                Ban
                                            </a>
                                        </td>
                                    @else
                                        <td class="text-center">
                                            <span class="label-default label label-danger">Banned</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('admin.unbanUser',$user->id)}}">
                                                <i class="glyphicon glyphicon-ok icon-white"></i>
                                                Unban
                                            </a>
                                        </td>
                                    @endif
                                </tr>
                                @endforeach
                                @foreach($companies as $company)
                                    <tr>
                                        <td class="text-center">{{$company->name}}</td>
                                        <td class="text-center">{{$company->created_at}}</td>
                                        <td class="text-center">Company</td>
                                        @if($company->status)
                                            <td class="text-center">
                                                <span class="label-success label label-default">Active</span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-danger action-btn" href="{{route('admin.banCompany',$company->id)}}">
                                                    <i class="glyphicon glyphicon-lock icon-white"></i>
                                                    Ban
                                                </a>
                                            </td>
                                        @else
                                            <td class="text-center">
                                                <span class="label-default label label-danger">Banned</span>
                                            </td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-success action-btn" href="{{route('admin.unbanCompany',$company->id)}}">
                                                    <i class="glyphicon glyphicon-ok icon-white"></i>
                                                    Unban
                                                </a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection