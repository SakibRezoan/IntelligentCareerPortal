@extends('main')
@section('title', 'Update Work Experience')
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
								{!! Form::model($jobseekerExperience,['route' =>['jobseekerExperience.update', $jobseekerExperience->id],'method'=>'PUT',]) !!}
								{{ Form::label('company', 'Company Name:') }}
								{{ Form::text('company', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('designation', 'Designation in Company:') }}
								{{ Form::text('designation', null, array('class' => 'form-control', 'maxlength' => '255')) }}
								<br>
								{{ Form::label('location', 'Company Location:') }}
								{{ Form::textarea('location',null, array('class' => 'form-control', 'maxlength' => '1000')) }}
								<br>
								<br>
								{{--{{ Form::label('skill_experience', 'Add Skill & Experience:') }}--}}
								<p class="btn btn-success" id="add_skill_experience">
									<i class="fa fa-plus" aria-hidden="true"></i>Add Skill & Experience</p>
								<div id = "dynamic_distribution">
									<div class="row">
										<br>
										@foreach(array_combine($jobseekerExperience->skill,$jobseekerExperience->experience) as $skill=>$experience)
											<div id="row{{$i=0}}">
												<div class="col-md-5">
													<div class="md-form">
														<input type="text" id="skill" name="skill[]" value="{{$skill}}" class="form-control" required>
														<label for="skill">Technical Skill</label>
													</div>
												</div>
												<div class="col-md-5">
													<div class="md-form">
														<input type="number" step="0.1" id="experience" name="experience[]" value="{{$experience}}" class="form-control" required>
														<label for="experience">Work Experience(years)</label>
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
	<script>
        $('#add_skill_experience').click(function(){
            i = '<?php $i++;
            		echo $i;
				?>';
            var new_skill_experience = '<div class="row" id="row'+i+'">' +
                '<div class="col-md-5"><div class="md-form">' +
                '<input type="text" required id="skill" name="skill[]" ' +
                'class="form-control"><label for="skill">Technical Skill' +
                '</label></div></div><div class="col-md-5"><div class="md-form">' +
                '<input type="number" required step="0.1" id="experience" name="experience[]" class="form-control">' +
                '<label for="experience">Required Experience(years)</label></div></div><div class="col-md-2">' +
                '<div class="md-form"><p class="btn btn-danger waves-effect waves-light btn-remove" id="'+i+'">' +
                '<i class="fa fa-minus" aria-hidden="true"></i></p></div></div></div>';
            $('#dynamic_distribution').append(new_skill_experience);
        });
        $(document).on('click','.btn-remove', function(){
            var button_id = $(this).attr("id");
            $('#row'+button_id).remove();
        });
	</script>

@endsection