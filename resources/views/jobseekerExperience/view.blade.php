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
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Work Experience List</h3>
                    </div>
                    <table id="work_experience" class="table table-condensed table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th class="table_data">Company </th>
                            <th class="table_data">Designation</th>
                            <th class="table_data">Company Location</th>
                            <th class="table_data">Skill & Experience</th>
                            <th class="table_action" style="width: 100px;">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jobseekerExperiences as $jobseekerExperience)
                            <tr>
                                <td class="table_data">{{ $jobseekerExperience->company }}</td>
                                <td class="table_data">{{ $jobseekerExperience->designation }}</td>
                                <td class="table_data">{!! $jobseekerExperience->location !!}</td>
                                
                                <td class=table_data" style="padding-left:25px; text-align:left; width: 300px">
                                    
                                    @for($i = 0; $i < count($jobseekerExperience->skill); $i++)
                                        {{ $jobseekerExperience->skill[$i]." - ".$jobseekerExperience->experience[$i] }}
                                        @if($jobseekerExperience->experience[$i]>1)
                                            {{" years"}}
                                        @else
                                            {{" year" }}
                                        @endif
                                        <br>
                                    @endfor
                                </td>
                                <td class="table_action">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerExperience.edit',$jobseekerExperience->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    {{" "}}
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
                </div>
            </div>
        </div>
    </div>
@endsection