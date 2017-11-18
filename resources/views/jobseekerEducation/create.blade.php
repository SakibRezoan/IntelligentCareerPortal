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
				<h4><b><u>Education Details</u></b></h4>
			</div>
			<hr>

			{!! Form::open(['route' => 'jobseekerEducation.store', 'data-parsley-validate' => '', 'files' => true]) !!}

			{{ Form::label('degree', 'Degree:') }}
			{{ Form::text('degree', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('group', 'Group:') }}
			{{ Form::text('group', null, array('class' => 'form-control', 'maxlength' => '25')) }}

			{{ Form::label('institute', 'Institute:') }}
			{{ Form::text('institute',null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('year_of_passing', 'Passing Year:') }}
			{{ Form::number('year_of_passing', null, array('class' => 'form-control', 'required' => '', 'min' => '1960')) }}

			{{ Form::checkbox('isStudying', true, 'Currently Studying') }}
			{{ Form::label('isStudying', "Currently Studying") }}
			<br>
			{{ Form::label('scanned_document', 'Upload Scanned Document:') }}
			{{ Form::file('scanned_document', null, ['class' => 'form-control', 'required'=>'']) }}

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
