@extends('main')
@section('title', 'Edit General Information')
@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('nav')
    @include('partials._nav')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @include('partials.jobseekerSidebar')

            <div class="col-xs-12 col-sm-9 col-md-8 toppad">
                <div class="row">
                    <div class="col-md-9 col-md-offset-1">
                        <div class="panel panel-info">
                            <div class="panel-body">
                                {!! Form::model($info,['route' =>['jobseekerGeneral_Info.update',$info->id],'method'=>'PUT', 'files' => true]) !!}
                                <div style="float: left;">
                                    {{ Form::label('avatar', 'Upload Profile Picture:') }}
                                    <input type="file" name="avatar"
                                           onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])">
                                </div>
                                <div style="float: right;">
                                    <img id="avatar" alt="Your Image" width="100" height="80" />
                                </div>
                                <br>
                                <br>
                                <br>
                                {{ Form::label('first_name', 'First Name:') }}
                                {{ Form::text('first_name', null, array('class' => 'form-control','maxlength' => '255','data-parsley-required'=>'true')) }}
                                <br>
                                {{ Form::label('last_name', 'Last Name:') }}
                                {{ Form::text('last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
                                <br>
                                {{ Form::label('date_of_birth', 'Date of Birth:') }}
                                {{ Form::date('date_of_birth',null, array('class' => 'form-control', 'required' => '')) }}
                                <br>
                                {{ Form::label('city', 'City:') }}
                                {{ Form::select('city', ['Dhaka North' => 'Dhaka North','Dhaka South' => 'Dhaka South','Gazipur' => 'Gazipur', 'Narayanganj'=>'Narayanganj', 'Rajshahi' => 'Rajshahi',
                                            'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                                            'Rangpur' => 'Rangpur', 'Comilla'=>'Comilla', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control','placeholder'=> 'Select City']) }}
                                <br>
                                {{ Form::label('gender', 'Gender:') }}
                                {{ Form::select('gender', ['male' => 'Male', 'Female' => 'Female',
                                        'others' =>'Others'], null, ['class' => 'form-control', 'placeholder'=> 'Select Gender']) }}
                                <br>
                                {{ Form::label('contact_no', 'Contact Number:') }}
                                {{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}
    
                                {{ Form::checkbox('hidden_status', true, 'Hide my contact number') }}
                                {{ Form::label('hidden_status', "Hide my contact number") }}
    
                                <br>
    
                                {{ Form::label('address', "Full Address:") }}
                                {{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000','wrap'=>'hard')) }}
    
                                {{ Form::submit('Update', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}
    
                                {{ Form::token() }}
    
                                {!! Form::close() !!}
    
                                <br>

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

@endsection