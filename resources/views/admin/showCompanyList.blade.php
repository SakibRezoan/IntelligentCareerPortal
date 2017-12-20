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
                        <h3 class="panel-title" align="center">Company List To Verify</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Company Name</th>
                                <th class="text-center">Date registered</th>
                                <th class="text-center">License</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <td class="text-center">{{$company->name}}</td>
                                    <td class="text-center">{{$company->created_at}}</td>
                                    <td class="text-center">
                                        <a target="_blank" href="http://127.0.0.1:8000/storage/images/{{ $company->document }}">
                                            View</a>
                                    </td>
                                    @if($company->status)
                                        <td class="text-center">
                                            <span class="label-success label label-default">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('admin.verifyCompany',$company->id)}}">
                                                <i class="glyphicon glyphicon-ok icon-white"></i>
                                                Verify
                                            </a>
                                            <a class="btn btn-sm btn-info action-btn" href="{{route('admin.cancelVerification',$company->id)}}">
                                                <i class="glyphicon glyphicon-alert icon-white"></i>
                                                Cancel
                                            </a>
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
                                            <a class="btn btn-sm btn-warning action-btn" href="{{route('admin.unbanCompany',$company->id)}}">
                                                <i class="glyphicon glyphicon-plus icon-white"></i>
                                                Unban
                                            </a>
                                            <a class="btn btn-sm btn-info action-btn" href="{{route('admin.cancelVerification',$company->id)}}">
                                                <i class="glyphicon glyphicon-alert icon-white"></i>
                                                Cancel
                                            </a>
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('admin.verifyCompany',$company->id)}}">
                                                <i class="glyphicon glyphicon-ok icon-white"></i>
                                                Verify
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