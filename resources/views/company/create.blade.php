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
								{!! Form::open(['route' => 'companyInfo.store', 'data-parsley-validate' => '', 'files' => true]) !!}
								
								<div style="float: left;">
									{{ Form::label('logo', 'Upload Company Logo:') }}
									<input type="file" name="logo" required
										   onchange="document.getElementById('logo').src = window.URL.createObjectURL(this.files[0])">
								</div>
								<div style="float: right;">
									<img id="logo" alt="Company Logo" width="100" height="80" />
								</div>
								<br>
								<br>
								<br>
								{{ Form::label('company_name', 'Company Name:') }}
								{{ Form::text('company_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('company_type', 'Company Type:') }}
								{{ Form::select('company_type', ['Government' => 'Government', 'Semi Government' => 'Semi-Government',
												'NGO' =>'NGO', 'Private Firm' => 'Private-Firm', 'International Agency' => 'International-Agency',
												'Other' => 'Other'],
												 null, ['class' => 'form-control',]) }}
								<br>
								{{ Form::label('date_of_establishment', 'Date of Establishment:') }}
								{{ Form::date('date_of_establishment',null, array('class' => 'form-control', 'required' => '')) }}
								<br>
								{{ Form::label('contact_no', 'Contact Number:') }}
								{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}
								<br>
								{{ Form::label('url', 'Company URL:') }}
								{{ Form::text('url', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('address', "Full Address:") }}
								{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000','wrap'=>'hard')) }}
								
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