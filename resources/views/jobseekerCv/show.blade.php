@extends('main')
@section('title', 'Curriculam Vitae')
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
                        <h3 class="panel-title">Curriculam Vitae</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3" align="center">
                                <img id="jobseekerAvatar" alt="Profile Picture" src="{{ asset('http://127.0.0.1:8000/storage/images/'.$generalInfo->avatar) }}"
                                     class="img-circle img-responsive">
                            </div>
                            
                            <div class=" col-md-9 col-lg-9 ">
                                <div style="text-align: left; padding-left: 100px;padding-right: 100px">
                                    <div>
                                        <h3><u>General Info:</u></h3>
                                        <p><b>First Name:</b> {{ $generalInfo->first_name }}</p>
                                        <p><b>Last Name:</b> {{ $generalInfo->last_name }}</p>
                                        <p><b>Date of Birth:</b> {{ $generalInfo->date_of_birth }}</p>
                                        <p><b>Contact No:</b> {{ $generalInfo->contact_no }}</p>
                                        <p><b>Address: </b> {{ $generalInfo->address }}</p>
                                    </div>
        
                                    <div>
                                        <h3><u>Educations:</u></h3>
                                        <hr>
                                        @foreach($educations as $education)
                                            <p><b>Degree:</b> {{ $education->degree }}</p>
                                            <p><b>Group:</b> {{ $education->group }} </p>
                                            <p><b>Institute:</b> {{ $education->institute }} </p>
                                            <p><b>Year of Passing:</b> {{ $education->year_of_passing }} </p>
                                            <hr>
                                        @endforeach
                                    </div>
        
                                    <div>
                                        <h3><u>Certificates:</u></h3>
                                        <hr>
                                        @foreach($certificates as $certificate)
                                            <p><b>Title:</b> {{ $certificate->title }}</p>
                                            <p><b>Authority:</b> {{ $certificate->authority }} </p>
                                            <p><b>License No:</b> {{ $certificate->license }} </p>
                                            <p><b>Certification Date:</b> {{ $certificate->date }} </p>
                                            <p><b>Official Link:</b> {{ $certificate->link }} </p>
                                            <hr>
                                        @endforeach
                                    </div>
        
                                    <div>
                                        <h3><u>Work Experiences:</u></h3>
                                        <hr>
                                        @foreach($work_experiences as $work_experience)
                                            <p><b>Company:</b> {{ $work_experience->company }}</p>
                                            <p><b>Designation:</b> {{ $work_experience->designation }} </p>
                                            <p><b>Location:</b> {{ $work_experience->location }} </p>
                                            <p><b>Skill & Experience:</b> <br>
                                                @for($i = 0; $i < count($work_experience->skill); $i++)
                                                    {{ $work_experience->skill[$i]." - ".$work_experience->experience[$i] }}
                                                    @if($work_experience->experience[$i]>1)
                                                        {{" years"}}
                                                    @else
                                                        {{" year" }}
                                                    @endif
                                                    <br>
                                                @endfor
                                            </p>
                                            <hr>
                                        @endforeach
                                    </div>
        
                                    <div>
                                        <h3><u>Team Experiences:</u></h3>
                                        <hr>
                                        @foreach($team_experiences as $team_experience)
                                            <p><b>Company:</b> {{ $team_experience->company }}</p>
                                            <p><b>Team Type:</b> {{ $team_experience->type }} </p>
                                            <p><b>Designation in Team:</b> {{ $team_experience->designation }} </p>
                                            <p><b>Client:</b> {{ $team_experience->client }} </p>
                                            <p><b>Product:</b> {{ $team_experience->product }} </p>
                                            <p><b>Product URL:</b> {{ $team_experience->product_url }} </p>
                                            <hr>
                                        @endforeach
                                    </div>
        
                                    <div>
                                        <h3><u>Job Preference:</u></h3>
                                        <p><b>Prefered Contract Types:</b> <br>
                                            @foreach($job_preference->contract_types as $contract_type)
                                                {{ $contract_type }} <br>
                                            @endforeach
                                        </p>
                                        <p><b>Prefered Organization Types:</b> <br>
                                            @foreach($job_preference->organizations as $organization)
                                                {{ $organization }} <br>
                                            @endforeach
                                        </p>
                                        <p><b>Prefered Locations:</b> <br>
                                            @foreach($job_preference->locations as $location)
                                                {{ $location }} <br>
                                            @endforeach
                                        </p>
                                        <p><b>Prefered Work Environment:</b> <br>
                                            {!! $job_preference->environment !!} </p>
                                        <p><b>Skill Wish-List: </b> <br>
                                            @foreach($job_preference->skill_wishlist as $sk_wil)
                                                {{ $sk_wil }} <br>
                                            @endforeach
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection