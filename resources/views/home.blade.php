@extends('layouts.app')
@section('title', 'General Information')
@section('content')
<div class="container">
    {{--<div class="row">--}}
        {{--<div class="col-md-8 col-md-offset-2">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}

                {{--<div class="panel-body">--}}
                    {{--@if (session('status'))--}}
                        {{--<div class="alert alert-success">--}}
                            {{--{{ session('status') }}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--You are logged in as <strong>Job Seeker</strong>!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">General Information</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3" align="center"> <img alt="Profile Picture" src="/storage/{{ $info->avatar }}" class="img-circle img-responsive">
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
                    <a href="{{ route('jobseekerGeneral_Info.edit',$info->id) }}" data-toggle="tooltip" data-placement="top" title="Edit General Information" type="button" class="btn btn-sm btn-warning">Edit</a>
                    <span class="pull-right">
                        <a href="{{ route('jobseekerGeneral_Info.delete',$info->id) }}" data-toggle="tooltip"  data-placement="top" title="Remove General Information" type="button" class="btn btn-sm btn-danger">Delete</a>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
