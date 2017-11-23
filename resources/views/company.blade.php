@extends('main')
@section('title', 'Company Dashboard')
@section('nav')
    @include('partials.company._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 sidebar">
                <div class="mini-submenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <br>
                <div class="list-group">
                <span href="#" class="list-group-item active">
                    Dashboard
                    <span class="pull-right" id="slide-submenu">
                    <i class="fa fa-times"></i>
                    </span>
                </span>
                    <a href="{{ route('job.create') }}" class="list-group-item">
                        <i class="fa fa-comment-o"></i> Post Job
                    </a>
                    <a href="{{ route('jobs.view') }}" class="list-group-item">
                        <i class="fa fa-comment-o"></i> View Posted Jobs
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-search"></i> Search Candidates
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-folder-open-o"></i> Recommended Candidates <span class="badge">14</span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-search"></i> Ask for Verification
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company Infrmation</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3" align="center">
                                <img alt="Company Logo" src="{{ asset('http://127.0.0.1:8000/storage/images/'.$info->logo) }}"
                                     class="img-square img-responsive">
                            </div>

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td class="general_info">Company Name:</td>
                                        <td>{{ $info->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Date of Establishment:</td>
                                        <td>{{ $info->date_of_establishment}}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Address:</td>
                                        <td>{!! $info->address !!} </td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Contact No:</td>
                                        <td>{{ $info->contact_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Company URL:</td>
                                        <td>{{ $info->url}}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Verification Status:</td>
                                        <td> @if($info->verification_status){{ "Verified" }}
                                            @else {{"Not Verified"}}
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="{{ route('companyInfo.edit',$info->id) }}"
                           data-toggle="tooltip" data-placement="top" title="Edit Company Information"
                           type="button" class="btn btn-sm btn-warning">Edit
                        </a>
                        <span class="pull-right">
                        <a href="{{ route('companyInfo.delete',$info->id) }}"
                           data-toggle="tooltip"  data-placement="top" title="Remove Company Information"
                           type="button" class="btn btn-sm btn-danger">Delete
                        </a>
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
