@extends('main')
@section('title', 'Searched Job List')
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
                        <h3 class="panel-title" align="center">Job List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-justify">Job Title</th>
                                <th class="text-justify">Job Position</th>
                                <th class="text-center">Apply Due Date</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($jobs as $job)
                                    <tr>
                                        <td class="text-justify">{{$job['job_title']}}</td>
                                        <td class="text-justify">{{$job['position']}}</td>
                                        <td class="text-center" style="width: 130px">{{$job['apply_due_date']}}</td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-primary action-btn" href="{{route('job.show',$job['id'])}}">
                                                <i class="glyphicon glyphicon-folder-open icon-white"></i>
                                                Show
                                            </a>
                                            <br><br>
                                            <a class="btn btn-sm btn-info action-btn" href="{{route('job.save',$job['id'])}}">
                                                <i class="glyphicon glyphicon-save icon-white"></i>
                                                Save
                                            </a>
                                            <br><br>
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('job.apply',$job['id'])}}">
                                                <i class="glyphicon glyphicon-send icon-white"></i>
                                                Apply
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