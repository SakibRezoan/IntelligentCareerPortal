@extends('main')
@section('title','Certificate List')
@section('nav')
    @include('partials._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')
            <div class="col-xs-12 col-sm-9 col-md-9 toppad" >
                <div align="left" style="margin-bottom: 10px">
                    <a class="btn btn-lg btn-success" href="{{route('jobseekerCertification.create')}}">
                        Add New Certificate
                    </a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Certificate List</h3>
                    </div>
                    {{--<div class="panel-body">--}}
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Title</th>
                                <th class="text-center">Authority</th>
                                <th class="text-center">License</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Official Link</th>
                                <th class="text-center">Document</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobseeker_certificates as $jobseeker_certificate)
                            <tr>
                                <td class="text-left">{{ $jobseeker_certificate->title }}</td>
                                <td class="text-left">{{ $jobseeker_certificate->authority }}</td>
                                <td class="text-left">{{ $jobseeker_certificate->license_no }}</td>
                                <td class="text-left">{{ $jobseeker_certificate->date }}</td>
                                <td class="text-left">{{ $jobseeker_certificate->link }}</td>
                                <td class="text-center">
                                    <a target="_blank" href="http://127.0.0.1:8000/storage/images/{{ $jobseeker_certificate->scanned_document }}">
                                    View</a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerCertification.edit',$jobseeker_certificate->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    <br>
                                    <br>
                                    {!! Form::open(['route' => ['jobseekerCertification.delete', $jobseeker_certificate->id],'method'=>'GET','style' => 'display:inline']) !!}
                                    {!! Form::button('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-sm',
                                            'title' => 'Delete',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    {{--</div>--}}
                </div>
            </div>
        </div>
    </div>
@endsection