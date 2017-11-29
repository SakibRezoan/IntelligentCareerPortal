@extends('main')
@section('title','Work Experience List')
@section('nav')
    @include('partials._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')
            <div class="col-xs-12 col-sm-9 col-md-9 toppad" >
                <div align="left" style="margin-bottom: 10px">
                    <a class="btn btn-lg btn-success create-new" href="{{route('jobseekerExperience.create')}}">
                        Add New Experience
                    </a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Work Experience List</h3>
                    </div>
                    {{--<div class="panel-body">--}}
                    <table class="table table-condensed table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">Designation</th>
                            <th class="text-center">Company Location</th>
                            <th class="text-center">Technical Skill</th>
                            <th class="text-center">Work Experience</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobseekerExperiences as $jobseekerExperience)
                            <tr>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerExperience->company }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerExperience->designation }}</td>
                                <td class="text-left" style="text-align: justify">{!! $jobseekerExperience->location !!}</td>
                                
                                <td class=text-left" style="text-align: justify">
                                    @foreach($jobseekerExperience->skill as $skill)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $skill }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach($jobseekerExperience->experience as $experience)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $experience }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerExperience.edit',$jobseekerExperience->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    <br>
                                    <br>
                                    {!! Form::open(['route' => ['jobseekerExperience.delete', $jobseekerExperience->id],'method'=>'GET','style' => 'display:inline']) !!}
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