@extends('main')

@section('title', 'Edit Company Information')
@section('nav')
	@include('partials.company._nav')
@endsection
@section('content')

	<div class="row">
    {!! Form::model($info,['route' =>['companyInfo.update',$info->id],'method'=>'PUT']) !!}
		<div class="col-md-2"></div>
		<div class="col-md-8">
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

			<div class="well">
				<div class="row">
					<div class="col-sm-6">
						<a href="{{ route('home') }}" class="btn btn-danger btn-block">Cancle</a>
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>

		</div>
		<div class="col-md-2">

		</div>
    {!! Form::close()!!}
	</div>


@endsection
