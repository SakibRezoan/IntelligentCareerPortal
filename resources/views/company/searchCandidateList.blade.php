@extends('main')
@section('title', 'Candidate List')
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
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Candidate List</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                            <tr>
                                <th class="text-center">Candidate Name</th>
                                <th class="text-center">Candidate Email</th>
                                <th class="text-center">Candidate CV</th>
                                <th class="text-center">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td class="text-center">{{$user->name}}</td>
                                        <td class="text-center">{{$user->email}}</td>
                                        <td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach

                                @foreach($candidatesInfo as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->user->name }}</td>
                                        <td class="text-center">{{ $user->user->email }}</td>
                                        <td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($candidatesEducation as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->user->name }}</td>
                                        <td class="text-center">{{ $user->user->email }}</td>
                                        <<td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($candidatesTeam as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->user->name }}</td>
                                        <td class="text-center">{{ $user->user->email }}</td>
                                        <td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($candidatesTeam as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->user->name }}</td>
                                        <td class="text-center">{{ $user->user->email }}</td>
                                        <td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($candidatesJobPreference as $user)
                                    <tr>
                                        <td class="text-center">{{ $user->user->name }}</td>
                                        <td class="text-center">{{ $user->user->email }}</td>
                                        <td class="text-center">
                                            <a href="{{route('candidate.cv.show',$user->user->id)}}">View CV</a>
                                        </td>
                                        <td class="text-center">
                                            <a class="btn btn-sm btn-success action-btn" href="{{route('candidate.invite',$user->user->id)}}">
                                                <i class="glyphicon glyphicon-arrow-left icon-white"></i>
                                                Invite
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