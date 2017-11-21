@extends('main')
@section('title', 'General Information')
@section('nav')
    @include('partials._nav')
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
                <a href="#" class="list-group-item">
                    <i class="fa fa-comment-o"></i> General Information
                </a>
                <a href="{{route('jobseekerEducation.list')}}" class="list-group-item">
                    <i class="fa fa-search"></i> Education
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-user"></i> Work Experience
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-user"></i> Job Preference
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-user"></i> Teams
                </a>
                <a href="#" class="list-group-item">
                    <i class="fa fa-folder-open-o"></i> Recommended Jobs <span class="badge">14</span>
                </a>
            </div>
        </div>
        <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">General Information</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3" align="center">
                            <img alt="Profile Picture" src="storage/{{ $info->avatar }}"
                                 class="img-circle img-responsive">
                            <button type="button" class="btn btn-default btn-sm">Update</button>
                        </div>

                        <div class=" col-md-9 col-lg-9 ">
                            <table class="table table-user-information">
                                <tbody>
                                <tr>
                                    <td class="general_info">First Name:</td>
                                    <td>{{ $info->first_name }}</td>
                                </tr>
                                <tr>
                                    <td class="general_info">Last Name:</td>
                                    <td>{{ $info->last_name }}</td>
                                </tr>
                                <tr>
                                    <td class="general_info">Date of Birth:</td>
                                    <td>{{ $info->date_of_birth }}</td>
                                </tr>
                                <tr>
                                    <td class="general_info">Gender:</td>
                                    <td>{{ $info->gender }}</td>
                                </tr>
                                <tr>
                                    <td class="general_info">Address:</td>
                                    <td>{{ $info->address }}</td>
                                </tr>
                                <tr>
                                    <td class="general_info">Contact No:</td>
                                    <td>{{ $info->contact_no }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <a href="{{ route('jobseekerGeneral_Info.edit',$info->id) }}"
                       data-toggle="tooltip" data-placement="top" title="Edit General Information"
                       type="button" class="btn btn-sm btn-warning">Edit
                    </a>
                    <span class="pull-right">
                        <a href="{{ route('jobseekerGeneral_Info.delete',$info->id) }}"
                           data-toggle="tooltip"  data-placement="top" title="Remove General Information"
                           type="button" class="btn btn-sm btn-danger">Delete
                        </a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
