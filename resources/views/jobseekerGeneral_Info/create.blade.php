@extends('main')

@section('title', '| Update General Information')

@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('content')

	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h1>Complete your profile</h1>
			<p>Let employee find you</p>
			<hr>

			{!! Form::open(['route' => 'jobseekerGeneral_Info.store', 'data-parsley-validate' => '']) !!}
				{{ Form::label('first_name', 'First Name:') }}
				{{ Form::text('first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('last_name', 'Last Name:') }}
				{{ Form::text('last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('date_of_birth', 'Date of Birth:') }}
				{{ Form::date('date_of_birth', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

				{{ Form::label('body', "Post Body:") }}
				{{ Form::textarea('body', null, array('class' => 'form-control', 'required' => '')) }}

				{{ Form::submit('Update', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;')) }}
			{!! Form::close() !!}
		</div>
	</div>

@endsection


@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
