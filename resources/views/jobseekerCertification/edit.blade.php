@extends('main')
@section('title', 'Update Certification Details')
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
						<div class="panel panel-default">
							<div class="panel-body">
								{!! Form::model($jobseeker_certificate,['route' =>['jobseekerCertification.update',$jobseeker_certificate->id],'method'=>'PUT', 'files' => true]) !!}
								
								{{ Form::label('title', 'Title:') }}
								{{ Form::text('title', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('authority', 'Name of Authority:') }}
								{{ Form::text('authority', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('license_no', 'License Number:') }}
								{{ Form::text('license_no',null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('link', 'Official Link:') }}
								{{ Form::text('link',null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('date', 'Certification Date:') }}
								{{ Form::date('date', null, array('class' => 'form-control', 'required' => '')) }}
								<br>
								{{ Form::label('scanned_document', 'Upload Scanned Document:') }}
								{{ Form::file('scanned_document', null, ['class' => 'form-control',]) }}
								{{ Form::submit('Submit', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}
								
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