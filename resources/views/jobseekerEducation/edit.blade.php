@extends('main')
@section('title', 'Add Education Details')
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
								{!! Form::model($jobseeker_education,['route' =>['jobseekerEducation.update',$jobseeker_education->id],'method'=>'PUT', 'files' => true]) !!}
								
								{{ Form::label('degree', 'Degree:') }}
								{{ Form::text('degree', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('group', 'Group:') }}
								{{ Form::text('group', null, array('class' => 'form-control', 'maxlength' => '25')) }}
								<br>
								{{ Form::label('institute', 'Institute:') }}
								{{ Form::text('institute',null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('year_of_passing', 'Passing Year:') }}
								{{ Form::number('year_of_passing', null, array('class' => 'form-control', 'required' => '', 'min' => '1960')) }}
								<br>
								{{ Form::label('cgpa', 'Gained GPA:') }}
								{{ Form::number('cgpa', null, array('class' => 'form-control', 'required' => '', 'step'=>'0.01')) }}
								<br>
								{{ Form::label('scanned_document', 'Upload Scanned Document:') }}
								{{ Form::file('scanned_document', null, ['class' => 'form-control', 'required'=>'']) }}
								{{ Form::submit('Submit', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}
								
								{{ Form::token() }}
								
								{!! Form::close() !!}
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




@extends('main')
@section('title', 'Update Education Details')
@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}

@endsection

@section('nav')
	@include('partials._nav')
@endsection