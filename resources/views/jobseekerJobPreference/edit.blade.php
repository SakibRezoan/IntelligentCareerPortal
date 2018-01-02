@extends('main')
@section('title', 'Edit Job Preference')
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
								{!! Form::model($jobseekerJobPreference,['route' =>['jobseekerJobPreference.update',$jobseekerJobPreference->id],'method'=>'PUT']) !!}
								{{ Form::label('contract_types[]', 'Preferred Contract Type:') }}
								{{ Form::select('contract_types[]', ['Full-time' => 'Full-time', 'Part-time' => 'Part-time',
												'Fixed-term' =>'Fixed-term', 'Temporary' => 'Temporary', 'Agency' => 'Agency',
												'Freelance' => 'Freelance', 'Zero-hour' =>'Zero-hour', 'Internship' =>'Internship' ],
												 null, ['multiple' => true,'class' => 'form-control','type' =>'checkbox']) }}
								<br>
								{{ Form::label('organizations[]', 'Preferred Organization Type:') }}
								{{ Form::select('organizations[]', ['Government' => 'Government', 'Semi Government' => 'Semi-Government',
												'NGO' =>'NGO', 'Private Firm' => 'Private-Firm', 'International Agency' => 'International-Agency',
												'Any' => 'Any'],
												 null, ['multiple' => true, 'class' => 'form-control',]) }}
								<br>
								{{ Form::label('locations[]', 'Preferred Job Locations:') }}
								{{ Form::select('locations[]', ['Dhaka North' => 'Dhaka North','Dhaka South' => 'Dhaka South','Gazipur' => 'Gazipur', 'Narayanganj'=>'Narayanganj', 'Rajshahi' => 'Rajshahi',
                                            'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                                            'Rangpur' => 'Rangpur', 'Comilla'=>'Comilla', 'Sylhet' =>'Sylhet' ], null, ['multiple'=>true,'class' => 'form-control','placeholder'=> 'Select Preferred Job Location']) }}
								<br>
								{{ Form::label('environment', "Preferred Work Environment:") }}
								{{ Form::textarea('environment', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000','wrap'=>'hard')) }}
								<br>
								{{ Form::label('minimum_compensation', 'Minimum Compensation(BDT):') }}
								{{ Form::number('minimum_compensation', null, array('class' => 'form-control', 'min' => '0')) }}
								
								{{ Form::checkbox('isNegotiable', true, 'Negotiable') }}
								{{ Form::label('isNegotiable', "Salary Negotiable") }}
								<br>
								<br>
								
								<p class="btn btn-success" id="add_skill_wishlist"><i class="fa fa-plus" aria-hidden="true"></i>
									Add Skill Wish-List</p>
								<div id = "dynamic_distribution">
									<div class="row">
										<br>
										@foreach($jobseekerJobPreference->skill_wishlist as $skwl)
										<div id="row{{$i=0}}">
											<div class="col-md-9">
												<div class="md-form">
													<input type="text" id="skill_wishlist" name="skill_wishlist[]" value="{{$skwl}}" maxlength="50" placeholder="Preferred Skill" class="form-control" required>
													<label for="skill_wishlist"></label>
												</div>
											</div>
											<div class="col-md-2">
												<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="{{$i}}">
														<i class="fa fa-minus" aria-hidden="true"></i>
													</p>
												</div>
											</div>
										</div>
										@endforeach
									</div>
								</div>
								
								{{ Form::submit('Update', array('class' => 'btn btn-success btn-md', 'style' => 'margin-top: 20px;')) }}
								
								{{ Form::token() }}
								
								{!! Form::close() !!}
							</div>
						</div>
					</div>
					<ul>
						<li type="none"><b>For Windows:</b><p style="text-align: left">Hold down the control (ctrl) button to select multiple options</p></li>
						<li type="none"><b>For Mac:</b><p style="text-align: left">Hold down the command button to select multiple options</p></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
	
	<script>
        $('#add_skill_wishlist').click(function(){
            i = '<?php $i++;
                echo $i;
                ?>';
            var new_skill_wishlist = '<div class="row" id="row'+i+'">' +
                '<div class="col-md-9"><div class="md-form">' +
                '<input type="text" required id="skill_wishlist" placeholder="Preferred Skill" maxlength="50" name="skill_wishlist[]" ' +
                'class="form-control"><label for="skill_wishlist">' +
                '</label></div></div>' +
				'<div class="col-md-2">' +
                '<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +
                '<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';
            $('#dynamic_distribution').append(new_skill_wishlist);
        });
        $(document).on('click','.btn-remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id).remove();
        });
	</script>

@endsection