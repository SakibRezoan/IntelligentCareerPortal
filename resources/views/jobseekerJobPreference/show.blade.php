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
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Contract Type</th>
                            <td class="text-left" style="padding-left:80px">
                                @foreach($jobseekerJobPreference->contract_types as $contract_type)
                                    
                                    @if($loop->last)
                                        {{ "    ".$contract_type." " }}
                                    @else
                                        {{ "    ".$contract_type."," }}
                                    @endif
                                    
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Organization Type</th>
                            <td class="text-left" style="padding-left:80px">
                                @foreach($jobseekerJobPreference->organizations as $organization)
                                    @if($loop->last)
                                        {{ "    ".$organization." " }}
                                    @else
                                        {{ "    ".$organization."," }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Job Locations</th>
                            <td class="text-left" style="padding-left:80px">
                                @foreach($jobseekerJobPreference->locations as $location)
                                    @if($loop->last)
                                        {{ "    ".$location." " }}
                                    @else
                                        {{ "    ".$location."," }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Skill Wish-List</th>
                            <td class="text-left" style="padding-left:80px">
                            @foreach($jobseekerJobPreference->skill_wishlist as $skill)
                                    @if($loop->last)
                                        {{ "    ".$skill." " }}
                                    @else
                                        {{ "    ".$skill."," }}
                                    @endif
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Work Environment</th>
                            <td class="text-justify" style="padding-left:80px">
                            {!! $jobseekerJobPreference->environment !!}
                            </td>
                        </tr>
                        <tr>
                            <th class="text-left" style="padding-left:100px;width: 300px;">Minimum Salary</th>
                            <td class="text-left" style="padding-left:80px">
                                {{ $jobseekerJobPreference->minimum_compensation." BDT" }}
                                @if($jobseekerJobPreference->isNegotiable) {{"(Negitiable)"}}
                                @else {{"(Not Negitiable)"}}
                                @endif
                            </td>
                        </tr>
                        <tfoot>
                            <tr>
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
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection