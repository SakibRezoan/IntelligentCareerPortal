@extends('main')

@section('title', 'Post New Job')

@section('stylesheets')

    {!! Html::style('css/parsley.css') !!}

@endsection

@section('nav')
    @include('partials.company._nav')
@endsection

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div align="center">
                <h4><b><u>New Job Details</u></b></h4>
            </div>
            <hr>

            {!! Form::open(['route' => 'job.store', 'data-parsley-validate' => '']) !!}

            {{ Form::label('job_title', 'Job Title:') }}
            {{ Form::text('job_title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
            <br>
            {{ Form::label('description', "Job Description:") }}
            {{ Form::textarea('description', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'2000','wrap'=>'hard')) }}
            <br>
            {{ Form::label('job_location', 'Job Location:') }}
            {{ Form::select('job_location', ['Dhaka' => 'Dhaka', 'Rajshahi' => 'Rajshahi',
                        'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                        'Rangpur' => 'Rangpur', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control','placeholder'=> 'Select Job Location']) }}
            <br>
            {{ Form::label('contract_type', 'Contract Type:') }}
            {{ Form::select('contract_type', ['Full-time' => 'Full-time', 'Part-time' => 'Part-time',
                        'Fixed-term' =>'Fixed-term', 'Temporary' => 'Temporary', 'Agency' => 'Agency',
                        'Freelance' => 'Freelance', 'Zero-hour' =>'Zero-hour', 'Internship' =>'Internship' ], null, ['class' => 'form-control','placeholder'=> 'Select Contract Type']) }}
            <br>
            {{ Form::label('apply_due_date', 'Apply Due Date:') }}
            {{ Form::date('apply_due_date',null, array('class' => 'form-control', 'required' => '')) }}
            <br>
            {{ Form::label('feature_and_benifits', "Feature and Benifits:") }}
            {{ Form::textarea('feature_and_benifits', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'2000','wrap'=>'hard')) }}
            <br>
            {{ Form::label('salary_min', 'Minium Salary:') }}
            {{ Form::number('salary_min', null, array('class' => 'form-control', 'min' => '0')) }}
            <br>
            {{ Form::label('salary_max', 'Maximum Salary:') }}
            {{ Form::number('salary_max', null, array('class' => 'form-control', 'min' => '0')) }}

            {{ Form::checkbox('isNegotiable', true, 'Salary Negotiable') }}
            {{ Form::label('isNegotiable', "Salary Negotiable") }}
            <br>
            {{ Form::label('vacancy', 'Vacancy:') }}
            {{ Form::number('vacancy', null, array('class' => 'form-control','required' => '', 'min' => '1',)) }}
            <br>
            {{ Form::label('required_degree', 'Required Degree:') }}
            {{ Form::text('required_degree', null, array('class' => 'form-control', 'maxlength' => '255')) }}

            <br>

            <div id = "dynamic_distribution">
                <div class="row">

                    <div class="col-md-5">
                        <div class="md-form">
                            <input type="text" id="skill" name="skill[]" class="form-control" required>
                            <label for="skill">Technical Skill</label>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="md-form">
                            <input type="number" id="experience" name="experience[]" class="form-control" required>
                            <label for="experience">Required Experience</label>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="md-form">
                            <p class="btn btn-success" id="add_skill_experience"><i class="fa fa-plus" aria-hidden="true"></i></p>
                        </div>
                    </div>

                </div>

            </div>

            {{ Form::submit('Update', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}

            {{ Form::token() }}

            {!! Form::close() !!}

            <br>

        </div>
    </div>

@endsection


@section('scripts')

    {!! Html::script('js/parsley.min.js') !!}
    <script>
        $('#add_skill_experience').click(function(){
            i++;
            var new_skill_experience = '<div class="row" id="row'+i+'">' +
                '<div class="col-md-5"><div class="md-form">' +
                '<input type="text" id="skill" name="skill[]" ' +
                'class="form-control"><label for="skill">Technical Skill' +
                '</label></div></div><div class="col-md-5"><div class="md-form">' +
                '<input type="number" id="experience" name="experience[]" class="form-control">' +
                '<label for="experience">Required Experience</label></div></div><div class="col-md-2">' +
                '<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +
                '<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';
            $('#dynamic_distribution').append(new_skill_experience);
        });
        $(document).on('click','.btn-remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id).remove();
        });
    </script>

@endsection
