@extends('main')
@section('title', 'General Information')
@section('nav')
    @include('partials._nav')
@endsection

@section('content')
<div class="container">
    <div class="row">

        @include('partials.jobseekerSidebar')

        <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
            <div class="panel panel-default">
                <div class="panel-heading" style="color:white;background-color:black;">
                    <h3 class="panel-title">General Information</h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 col-lg-3" align="center">
                            <img id="jobseekerAvatar" alt="Profile Picture" src="{{ asset('http://127.0.0.1:8000/storage/images/'.$info->avatar) }}"
                                 class="img-circle img-responsive">
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
                                    <td style="text-align: justify;">{!! $info->address !!}</td>
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
                <div class="panel-footer" align="center">
                    <a align="left" href="{{ route('jobseekerGeneral_Info.edit',$info->id) }}"
                       type="button" data-title="Edit" class="btn btn-md btn-warning "><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>Update
                    </a>
                    {!! Form::open(['route' => ['jobseekerGeneral_Info.delete', $info->id],'method'=>'GET','style' => 'display:inline']) !!}
                    {!! Form::button('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete', array(
                            'type' => 'submit',
                            'class' => 'btn btn-danger btn-md',
                            'title' => 'Delete',
                            'onclick'=>'return confirm("Confirm delete?")'
                    )) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
