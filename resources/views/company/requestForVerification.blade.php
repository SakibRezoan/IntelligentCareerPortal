@extends('main')
@section('title', 'Update Company Information')
@section('stylesheets')
	
	{!! Html::style('css/parsley.css') !!}

@endsection

@section('nav')
	@include('partials.company._nav')
@endsection

@section('content')
	<div class="container">
		<div class="row">
			@include('partials.companySidebar')
			
			<div class="col-xs-12 col-sm-9 col-md-8 toppad">
				<div class="row">
					<div class="col-md-9 col-md-offset-1">
						
						<div class="panel panel-default">
							<div class="panel-body">
								{!! Form::open(['route' => 'company.requestForVerification.submit', 'data-parsley-validate' => '', 'files' => true]) !!}
								
								{{ Form::label('document', 'Upload Document / Company License:') }}
								<br>
								{{ Form::file('document', null, array('required' => '')) }}
								
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