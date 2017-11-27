@extends('main')
@section('title','Job Preference')
@section('nav')
    @include('partials._nav')
@endsection
@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')
            <div class="col-xs-12 col-sm-9 col-md-9 toppad" >
                <div class="panel panel-default">
                    <div class="panel-heading" style="color:white;background-color:black;">
                        <h3 class="panel-title" align="center">Job Preference</h3>
                    </div>
                    <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                        <thead>
                        <tr>
                            <th class="text-center">Contract Type</th>
                            <th class="text-center">Organization Type</th>
                            <th class="text-center">Job Locations</th>
                            <th class="text-center">Skills</th>
                            <th class="text-center">Work Environment</th>
                            <th class="text-center">Minimum Salary</th>
                            <th class="text-center">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">
                                    @foreach($jobseekerJobPreference->contract_types as $ct)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $ct }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach($jobseekerJobPreference->organizations as $org)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $org }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach($jobseekerJobPreference->locations as $loc)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $loc }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-center">
                                    @foreach($jobseekerJobPreference->skill_wishlist as $skwl)
                                        <ul style="list-style:none; padding-left:5px">
                                            <li>{{ $skwl }}<hr></li>
                                        </ul>
                                    @endforeach
                                </td>
                                <td class="text-left" style="text-align: justify">{!! $jobseekerJobPreference->environment !!}</td>
                                <td class="text-center">
                                    {{ $jobseekerJobPreference->minimum_compensation." BDT" }}
                                    @if($jobseekerJobPreference->isNegotiable)
                                        <hr>{{"Negitiable"}}
                                    @else
                                        <hr>{{"Not Negitiable"}}
                                    @endif
                                </td>
                                <td class="text-center">
                                    <a class="btn btn-sm btn-warning" title ="Edit" href="{{route('jobseekerJobPreference.edit',$jobseekerJobPreference->id)}}">
                                        <i class="glyphicon glyphicon-edit icon-white"></i>
                                    </a>
                                    <br>
                                    <br>
                                    {!! Form::open(['route' => ['jobseekerJobPreference.delete', $jobseekerJobPreference->id],'method'=>'GET','style' => 'display:inline']) !!}
                                    {!! Form::button('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i>', array(
                                            'type' => 'submit',
                                            'class' => 'btn btn-danger btn-sm',
                                            'title' => 'Delete',
                                            'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection