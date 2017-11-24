@extends('main')
@section('title','Education List')
@section('nav')
    @include('partials._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')
            <div class="col-xs-12 col-sm-9 col-md-9 toppad" >
                <div align="left" style="margin-bottom: 10px">
                    <a class="btn btn-lg btn-success" href="{{route('jobseekerEducation.create')}}">
                        Add New Education
                    </a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Education List</h3>
                    </div>
                    {{--<div class="panel-body">--}}
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Degree</th>
                                <th class="text-center">Group</th>
                                <th class="text-center">Institute</th>
                                <th class="text-center">CGPA</th>
                                <th class="text-center">Studying/Passed</th>
                                <th class="text-center">Document</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobseeker_educations as $jobseeker_education)
                            <tr>
                                <td class="text-left">{{ $jobseeker_education->degree }}</td>
                                <td class="text-left">{{ $jobseeker_education->group }}</td>
                                <td class="text-left">{{ $jobseeker_education->institute }}</td>
                                <td class="text-center">{{ $jobseeker_education->cgpa }}</td>
                                <td class="text-center">
                                    @if($jobseeker_education->isStudying)
                                    {{ "Currently Studying" }}
                                    @else
                                    {{ "Passed"."($jobseeker_education->year_of_passing)" }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a target="_blank" href="http://127.0.0.1:8000/storage/images/{{ $jobseeker_education->scanned_document }}">
                                    Scanned Document</a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" href="{{route('jobseekerEducation.edit',$jobseeker_education->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    <br>
                                    <br>
                                    <a class="btn btn-sm btn-danger" href="{{route('jobseekerEducation.delete',$jobseeker_education->id)}}">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                    </a>
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