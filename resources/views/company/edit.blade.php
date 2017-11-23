@extends('main')

@section('title', 'Edit Company Information')
@section('nav')
	@include('partials.company._nav')
@endsection
@section('content')

	<div class="row">
    {!! Form::model($info,['route' =>['companyInfo.update',$info->id],'method'=>'PUT', 'files'=> true]) !!}
		<div class="col-md-2"></div>
		<div class="col-md-8">

			<img id="logo" alt="Company Logo" width="100" height="100" />
			<br>
			{{ Form::label('logo', 'Upload Company Logo:') }}
			<input type="file" name="logo"
				   onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
			<br>
			{{ Form::label('company_name', 'Company Name:') }}
			{{ Form::text('company_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('date_of_establishment', 'Date of Establishment:') }}
			{{ Form::date('date_of_establishment',null, array('class' => 'form-control', 'required' => '',)) }}

			{{ Form::label('contact_no', 'Contact Number:') }}
			{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}

			{{ Form::label('url', 'Company URL:') }}
			{{ Form::text('url', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			<br>

			{{ Form::label('address', "Full Address:") }}
			{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000')) }}

            {{ Form::submit('Save Changes', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}

		</div>
		<div class="col-md-2">

		</div>
    {!! Form::close()!!}
	</div>

@endsection
