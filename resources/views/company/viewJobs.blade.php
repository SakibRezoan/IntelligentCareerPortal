@extends('main')
@section('title', 'Job List')
@section('stylesheets')
    
    {!! Html::style('css/parsley.css') !!}

@endsection

@section('nav')
    @include('partials.company._nav')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.companySidebar')
            
            <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Job List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="center">Job Title</th>
                                <th class="center">Apply Due Date</th>
                                <th class="center">Last Updated</th>
                                <th class="center">Status</th>
                                <th class="center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <td class="center">{{$job->job_title}}</td>
                                    <td class="center">{{$job->apply_due_date}}</td>
                                    <td class="center">{{$job->updated_at}}</td>
                                    <td class="center">
                                        @if($job->isAvailable)
                                            <span class="label-success label label-default">Available</span>
                                            <a class="btn btn-sm btn-warning" href="#">
                                                <i class="glyphicon glyphicon-lock icon-white"></i>
                                                Close
                                            </a>
                                        @else
                                            <span class="label-default label label-danger">Closed</span>
                                        @endif
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-sm btn-success" href="{{route('job.show',$job->id)}}">
                                            <i class="glyphicon glyphicon-folder-open icon-white"></i>
                                            Show
                                        </a>
                                        <br>
                                        <a class="btn btn-sm btn-info" href="{{route('job.edit',$job->id)}}">
                                            <i class="glyphicon glyphicon-edit icon-white"></i>
                                            Update
                                        </a>
                                        <br>
                                        <a class="btn btn-sm btn-danger" href="{{route('job.delete',$job->id)}}">
                                            <i class="glyphicon glyphicon-trash icon-white"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection