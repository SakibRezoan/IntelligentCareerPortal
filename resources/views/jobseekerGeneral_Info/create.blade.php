@extends('main')

@section('title', 'Update General Information')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Complete your profile</h1>
			<p>Let the employee find you</p>
			<hr>

			{!! Form::open(['route' => 'jobseekerGeneral_Info.store', 'data-parsley-validate' => '', 'files' => true]) !!}

			{{--<div>--}}
				{{--<label for="avatar">Upload Profile Picture</label> <br>--}}
				{{--<input type="file" name="avatar" id="avatar" value="Upload Profile Picture" class="form-control">--}}
			{{--</div>--}}

			{{ Form::label('avatar', 'Upload Profile Picture:') }}
			{{ Form::file('avatar', null, ['class' => 'form-control']) }}

			{{ Form::label('first_name', 'First Name:') }}
			{{ Form::text('first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('last_name', 'Last Name:') }}
			{{ Form::text('last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('date_of_birth', 'Date of Birth:') }}
			{{ Form::date('date_of_birth', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('city', 'City:') }}
			{{ Form::select('city', ['Dhaka' => 'Dhaka', 'Rajshahi' => 'Rajshahi',
                        'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                        'Rangpur' => 'Rangpur', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control']) }}
			{{ Form::label('gender', 'Gender:') }}
			{{ Form::select('gender', ['male' => 'Male', 'Female' => 'Female',
                    'others' =>'Others'], null, ['class' => 'form-control']) }}

			{{ Form::label('contact_no', 'Contact Number:') }}
			{{--{{ Form::input('number', 'contact_no', $value = null, $options = array('class' => 'form-control', 'maxlength' => '11')) }}--}}
			{{--{!! Form::input('contact_no', 'otp', null, ['class' => 'form-control', 'maxlength' => '11']) !!}--}}
			{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}

			{{ Form::checkbox('hidden_status', true, null) }}
			{{ Form::label('hidden_status', "Hide my contact number") }}

			<br>

			{{ Form::label('address', "Full Address:") }}
			{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000')) }}

			{{ Form::submit('Update', array('class' => 'btn btn-success btn-lg', 'style' => 'margin-top: 20px;')) }}

			{{ Form::token() }}

			{!! Form::close() !!}

			<br>

		</div>
	</div>

@endsection


@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
