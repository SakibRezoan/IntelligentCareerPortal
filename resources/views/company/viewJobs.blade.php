@extends('main')
@section('title','User List')
@section('nav')
    @include('partials.company._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-md-3 sidebar">
                <div class="mini-submenu">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </div>
                <br>
                <div class="list-group">
                <span href="#" class="list-group-item active">
                    Dashboard
                    <span class="pull-right" id="slide-submenu">
                    <i class="fa fa-times"></i>
                    </span>
                </span>
                    <a href="{{ route('job.create') }}" class="list-group-item">
                        <i class="fa fa-comment-o"></i> Post Job
                    </a>
                    <a href="{{ route('jobs.view') }}" class="list-group-item">
                        <i class="fa fa-comment-o"></i> View Posted Jobs
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-search"></i> Search Candidates
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-folder-open-o"></i> Recommended Candidates <span class="badge">14</span>
                    </a>
                    <a href="#" class="list-group-item">
                        <i class="fa fa-search"></i> Ask for Verification
                    </a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title" align="center">Job List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="center">Job Title</th>
                                <th class="center">Apply Due Date</th>
                                <th class="center">Updated at</th>
                                <th class="center">Status</th>
                                <th class="center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="center">Software Engineer</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">
                                    <span class="label-success label label-default">Available</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-sm btn-success" href="{{route('job.show',1)}}">
                                        <i class="glyphicon glyphicon-folder-open icon-white"></i>
                                        Show
                                    </a>
                                    <a class="btn btn-sm btn-info" href="#">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                        Edit
                                    </a>
                                    <a class="btn btn-sm btn-warning" href="#">
                                        <i class="glyphicon glyphicon-lock icon-white"></i>
                                        Close
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="#">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Java Developer</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">
                                    <span class="label-default label label-danger">Closed</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-sm btn-success" href="#">
                                        <i class="glyphicon glyphicon-folder-open icon-white"></i>
                                        Show
                                    </a>
                                    <a class="btn btn-sm btn-info" href="#">
                                        <i class="glyphicon glyphicon-ok icon-white"></i>
                                        Re-open
                                    </a>
                                    <a class="btn btn-sm btn-danger" href="#">
                                        <i class="glyphicon glyphicon-trash icon-white"></i>
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection