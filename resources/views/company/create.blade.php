@extends('main')

@section('title', 'Update Company Information')

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
				<h4><b><u>Company Information</u></b></h4>
			</div>
			<hr>

			{!! Form::open(['route' => 'companyInfo.store', 'data-parsley-validate' => '', 'files' => true]) !!}

			<img id="logo" alt="Company Logo" width="100" height="100" />
			<br>
			{{ Form::label('logo', 'Upload Company Logo:') }}
			<input type="file" name="logo" required
				   onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
			<br>
			{{ Form::label('company_name', 'Company Name:') }}
			{{ Form::text('company_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('date_of_establishment', 'Date of Establishment:') }}
			{{ Form::date('date_of_establishment',null, array('class' => 'form-control', 'required' => '')) }}

			{{ Form::label('contact_no', 'Contact Number:') }}
			{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}

			{{ Form::label('url', 'Company URL:') }}
			{{ Form::text('url', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}


			<br>

			{{ Form::label('address', "Full Address:") }}
			{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000','wrap'=>'hard')) }}

			{{ Form::submit('Update', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}

			{{ Form::token() }}

			{!! Form::close() !!}

			<br>

		</div>
	</div>

@endsection


@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}

@endsection
