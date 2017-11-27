@extends('main')
@section('title', 'Add Team Details')
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
								{!! Form::open(['route' => 'jobseekerTeam.store', 'data-parsley-validate' => '',]) !!}
								
								{{ Form::label('company', 'Company Name:') }}
								{{ Form::text('company', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('type', 'Team Type:') }}
								{{ Form::select('type', ['Functional' => 'Functional', 'Cross-Functional' => 'Cross-Functional',
                                        'Leadership' =>'Leadership','Self-Directed' =>'Self-Directed','Virtual' =>'Virtual',], null, ['class' => 'form-control', 'placeholder'=> 'Select Team Type']) }}
								<br>
								{{ Form::label('designation', 'Designation in Team:') }}
								{{ Form::text('designation', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('client', 'Client Name:') }}
								{{ Form::text('client', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('client_industry', 'Client Industry:') }}
								{{ Form::text('client_industry', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('description', 'Team Description:') }}
								{{ Form::textarea('description',null, array('class' => 'form-control', 'maxlength' => '2000')) }}
								<br>
								{{ Form::label('product', 'Product Name:') }}
								{{ Form::text('product',null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('product_url', 'Product URL:') }}
								{{ Form::text('product_url',null, array('class' => 'form-control', 'maxlength' => '255')) }}
								
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