@extends('main')
@section('title','User List')
@section('nav')
    @include('partials.admin._nav')
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
                    <a href="#" class="list-group-item">
                        <i class="fa fa-comment-o"></i> View User
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
                        <h3 class="panel-title" align="center">User List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="center">Username</th>
                                <th class="center">Date registered</th>
                                <th class="center">Role</th>
                                <th class="center">Status</th>
                                <th class="center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="center">Rizwan Habib</td>
                                <td class="center">2012/01/21</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label-success label label-default">Active</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-sm btn-danger" href="#">
                                        <i class="glyphicon glyphicon-lock icon-white"></i>
                                        Ban
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Amrin Sana</td>
                                <td class="center">2012/08/23</td>
                                <td class="center">Staff</td>
                                <td class="center">
                                    <span class="label-default label label-danger">Banned</span>
                                </td>
                                <td class="center">
                                    <a class="btn btn-sm btn-success" href="#">
                                        <i class="glyphicon glyphicon-ok icon-white"></i>
                                        Unban
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