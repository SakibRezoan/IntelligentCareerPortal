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
                        <table id="teams" class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="table-data">Company</th>
                                <th class="table-data">Team Type</th>
                                <th class="table-data">Designation</th>
                                <th class="table-data">Client</th>
                                <th class="table-data">Product</th>
                                <th class="table-data">Product URL</th>
                                <th class="text-center table-action" style="width: 100px;">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobseekerTeams as $jobseekerTeam)
                            <tr>
                                <td class="table-data">{{ $jobseekerTeam->company }}</td>
                                <td class="table-data">{{ $jobseekerTeam->type }}</td>
                                <td class="table-data">{{ $jobseekerTeam->designation }}</td>
                                <td class="table-data">{{ $jobseekerTeam->client }}</td>
                                <td class="table-data">{{ $jobseekerTeam->product }}</td>
                                <td class="table-data">
                                    <a target="_blank"
                                       href="{{ $jobseekerTeam->product_url }}">{{ $jobseekerTeam->product_url }}
                                    </a>
                                </td>
                                <td class="table_action">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerTeam.edit',$jobseekerTeam->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    {{ " " }}
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