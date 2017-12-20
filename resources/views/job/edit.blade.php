@extends('main')
@section('title', 'Post New Job')
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
            <div class="col-xs-12 col-sm-9 col-md-8 toppad">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                        
                        <div class="panel panel-default">
                            <div class="panel-body">
                                {!! Form::model($job,['route' =>['job.update',$job->id],'method'=>'PUT']) !!}
                                {{ Form::label('job_title', 'Job Title:') }}
                                {{ Form::text('job_title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                <br>
                                {{ Form::label('position', 'Position:') }}
                                {{ Form::text('position', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                <br>
                                {{ Form::label('job_location', 'Job Location:') }}
                                {{ Form::select('job_location', ['Dhaka North' => 'Dhaka North','Dhaka South' => 'Dhaka South','Gazipur' => 'Gazipur', 'Narayanganj'=>'Narayanganj', 'Rajshahi' => 'Rajshahi',
                                            'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                                            'Rangpur' => 'Rangpur', 'Comilla'=>'Comilla', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control','placeholder'=> 'Select Job Location']) }}
                                <br>
                                {{ Form::label('vacancy', 'Vacancy:') }}
                                {{ Form::number('vacancy', null, array('class' => 'form-control','required' => '', 'min' => '1',)) }}
                                <br>
                                {{ Form::label('contract_type', 'Contract Type:') }}
                                {{ Form::select('contract_type', ['Full-time' => 'Full-time', 'Part-time' => 'Part-time',
                                            'Fixed-term' =>'Fixed-term', 'Temporary' => 'Temporary', 'Agency' => 'Agency',
                                            'Freelance' => 'Freelance', 'Zero-hour' =>'Zero-hour', 'Internship' =>'Internship' ],
                                            null, ['class' => 'form-control','placeholder'=> 'Select Contract Type']) }}
                                <br>
                                {{ Form::label('apply_due_date', 'Apply Due Date:') }}
                                {{ Form::date('apply_due_date',old('apply_due_date',\Carbon\Carbon::now()),
                                                ['class'=>'form-control date-picker', 'required'=>'']) }}
                                <br>
                                {{ Form::label('salary_min', 'Minimum Salary (BDT):') }}
                                {{ Form::number('salary_min', null, array('class' => 'form-control', 'min' => '0')) }}
                                <br>
                                {{ Form::label('salary_max', 'Maximum Salary (BDT):') }}
                                {{ Form::number('salary_max', null, array('class' => 'form-control', 'min' => '0')) }}
                                {{ Form::checkbox('isNegotiable', true, 'Salary Negotiable') }}
                                {{ Form::label('isNegotiable', "Salary Negotiable") }}
                                <br>
                                {{ Form::label('description', "Job Description:") }}
                                {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'2000','wrap'=>'hard')) }}
                                <br>
                                {{ Form::label('feature_and_benifits', "Feature and Benifits:") }}
                                {{ Form::textarea('feature_and_benifits', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'2000','wrap'=>'hard')) }}
                                <br>
                                {{ Form::label('max_age', 'Maximum Age:') }}
                                {{ Form::number('max_age', null, array('class' => 'form-control')) }}
                                <br>
                                {{ Form::label('required_degree', 'Required Degree:') }}
                                {{ Form::text('required_degree', null, array('class' => 'form-control', 'maxlength' => '255')) }}
                                <br>
    
                                <p class="btn btn-success" id="add_skill_experience">
                                    <i class="fa fa-plus" aria-hidden="true"></i>Add Skill & Experience</p>
                                <div id = "dynamic_distribution">
                                    <div class="row">
                                        <br>
                                        @foreach(array_combine($job->skill,$job->experience) as $skill=>$experience)
                                            <div id="row{{$i=0}}">
                                                <div class="col-md-5">
                                                    <div class="md-form">
                                                        <input type="text" id="skill" name="skill[]" value="{{$skill}}" class="form-control" required>
                                                        <label for="skill">Needed Skill</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="md-form">
                                                        <input type="number" step="0.1" id="experience" name="experience[]" value="{{$experience}}" class="form-control" required>
                                                        <label for="experience">Needed Experience(years)</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="{{$i}}">
                                                            <i class="fa fa-minus" aria-hidden="true"></i>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
        
                                    </div>
    
                                </div>
                                
                                {{--<div id = "dynamic_distribution">--}}
                                    {{--<div class="row">--}}
                                        {{----}}
                                        {{--<div class="col-md-5">--}}
                                            {{--<div class="md-form">--}}
                                                {{--<input type="text" id="skill" name="skill[]" class="form-control" required>--}}
                                                {{--<label for="skill">Needed Skill</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-5">--}}
                                            {{--<div class="md-form">--}}
                                                {{--<input type="number" step="0.1" id="experience" name="experience[]" class="form-control" required>--}}
                                                {{--<label for="experience">Needed Experience(years)</label>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-2">--}}
                                            {{--<div class="md-form">--}}
                                                {{--<p class="btn btn-success" id="add_skill_experience"><i class="fa fa-plus" aria-hidden="true"></i></p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{----}}
                                    {{--</div>--}}
                                {{----}}
                                {{--</div>--}}
                                
                                {{ Form::submit('Submit', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}
                                
                                {{ Form::token() }}
                                
                                {!! Form::close() !!}
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    
    {!! Html::script('js/parsley.min.js') !!}

    <script>
        $('#add_skill_experience').click(function(){
            i = '<?php $i++;
                echo $i;
                ?>';
            var new_skill_experience = '<div class="row" id="row'+i+'">' +
                '<div class="col-md-5"><div class="md-form">' +
                '<input type="text" required id="skill" name="skill[]" ' +
                'class="form-control"><label for="skill">Needed Skill' +
                '</label></div></div><div class="col-md-5"><div class="md-form">' +
                '<input type="number" required step="0.1" id="experience" name="experience[]" class="form-control">' +
                '<label for="experience">Needed Experience(years)</label></div></div><div class="col-md-2">' +
                '<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +
                '<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';
            $('#dynamic_distribution').append(new_skill_experience);
        });
        $(document).on('click','.btn-remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id).remove();
        });
    </script>
    {{--<script>--}}
        {{--$('#add_skill_experience').click(function(){--}}
            {{--i++;--}}
            {{--var new_skill_experience = '<div class="row" id="row'+i+'">' +--}}
                {{--'<div class="col-md-5"><div class="md-form">' +--}}
                {{--'<input type="text" id="skill" name="skill[]" ' +--}}
                {{--'class="form-control"><label for="skill">Technical Skill' +--}}
                {{--'</label></div></div><div class="col-md-5"><div class="md-form">' +--}}
                {{--'<input type="number" step="0.1" id="experience" name="experience[]" class="form-control">' +--}}
                {{--'<label for="experience">Required Experience(years)</label></div></div><div class="col-md-2">' +--}}
                {{--'<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +--}}
                {{--'<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';--}}
            {{--$('#dynamic_distribution').append(new_skill_experience);--}}
        {{--});--}}
        {{--$(document).on('click','.btn-remove', function(){--}}
            {{--var button_id = $(this).attr("id");--}}
            {{--$('#row'+button_id).remove();--}}
        {{--});--}}
    {{--</script>--}}

@endsection
