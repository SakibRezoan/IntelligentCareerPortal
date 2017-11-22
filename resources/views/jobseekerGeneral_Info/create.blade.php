@extends('main')

@section('title', 'Update General Information')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('nav')
	@include('partials._nav')
@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div align="center">
				<h4><b><u>Complete your profile</u></b></h4>
				<p>Let the employee find you</p>
			</div>
			<hr>

			{!! Form::open(['route' => 'jobseekerGeneral_Info.store', 'data-parsley-validate' => '', 'files' => true]) !!}

            <img id="avatar" alt="Your Image" width="100" height="100" />
            <br>
			{{ Form::label('avatar', 'Upload Profile Picture:') }}
			{{--{{ Form::file('avatar', null, ['class' => 'form-control', 'required'=>'']) }}--}}
			<input type="file" name="avatar" required
                   parsley-filemaxsize="Avatar|20"
				   onchange="document.getElementById('avatar').src = window.URL.createObjectURL(this.files[0])">
			<br>
			{{ Form::label('first_name', 'First Name:') }}
			{{ Form::text('first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('last_name', 'Last Name:') }}
			{{ Form::text('last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('date_of_birth', 'Date of Birth:') }}
			{{ Form::date('date_of_birth',null, array('class' => 'form-control', 'required' => '')) }}

			{{ Form::label('city', 'City:') }}
			{{ Form::select('city', ['Dhaka' => 'Dhaka', 'Rajshahi' => 'Rajshahi',
                        'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                        'Rangpur' => 'Rangpur', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control','placeholder'=> 'Select City']) }}
			{{ Form::label('gender', 'Gender:') }}
			{{ Form::select('gender', ['male' => 'Male', 'Female' => 'Female',
                    'others' =>'Others'], null, ['class' => 'form-control', 'placeholder'=> 'Select Gender']) }}

			{{ Form::label('contact_no', 'Contact Number:') }}
			{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}

			{{ Form::checkbox('hidden_status', true, 'Hide my contact number') }}
			{{ Form::label('hidden_status', "Hide my contact number") }}

			<br>

			{{ Form::label('address', "Full Address:") }}
			{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000','wrap'=>'hard')) }}

			{{ Form::submit('Update', array('class' => 'btn btn-success', 'style' => 'margin-top: 20px;')) }}

			{{ Form::token() }}

			{!! Form::close() !!}

			<br>

		</div>
	</div>

@endsection


@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
