@extends('main')
@section('title','Team List')
@section('nav')
    @include('partials._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')
            <div class="col-xs-12 col-sm-9 col-md-9 toppad" >
                <div align="left">
                    <a class="btn btn-lg btn-success create-new" href="{{route('jobseekerTeam.create')}}">
                        Add New Team
                    </a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Team List</h3>
                    </div>
                    {{--<div class="panel-body">--}}
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Company Name</th>
                                <th class="text-center">Team Type</th>
                                <th class="text-center">Designation</th>
                                <th class="text-center">Client Name</th>
                                <th class="text-center">Client Industry</th>
                                <th class="text-center">Team Description</th>
                                <th class="text-center">Product Name</th>
                                <th class="text-center">Product URL</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobseekerTeams as $jobseekerTeam)
                            <tr>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->company }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->type }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->designation }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->client }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->client_industry }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->description }}</td>
                                <td class="text-left" style="text-align: justify">{{ $jobseekerTeam->product }}</td>
                                <td class="text-left" style="text-align: justify">
                                    <a target="_blank"
                                       href="{{ $jobseekerTeam->product_url }}">{{ $jobseekerTeam->product_url }}
                                    </a>
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerTeam.edit',$jobseekerTeam->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    <br>
                                    <br>
                                    {!! Form::open(['route' => ['jobseekerTeam.delete', $jobseekerTeam->id],'method'=>'GET','style' => 'display:inline']) !!}
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