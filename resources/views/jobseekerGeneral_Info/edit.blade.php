@extends('main')

@section('title', 'Edit General Information')

@section('content')

	<div class="row">
    {!! Form::model($info,['route' =>['jobseekerGeneral_Info.update',$info->id],'method'=>'PUT', 'files' => true]) !!}
		<div class="col-md-2"></div>
		<div class="col-md-8">
			{{ Form::label('first_name', 'First Name:') }}
			{{ Form::text('first_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('last_name', 'Last Name:') }}
			{{ Form::text('last_name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('date_of_birth', 'Date of Birth:') }}
			{{ Form::date('date_of_birth', \Carbon\Carbon::now(), array('class' => 'form-control', 'required' => '', 'maxlength' => '255')) }}

			{{ Form::label('city', 'City:') }}
			{{ Form::select('city', ['Dhaka' => 'Dhaka', 'Rajshahi' => 'Rajshahi',
                        'Khulna' =>'Khulna', 'Chittagong' => 'Chittagong', 'Barisal' => 'Barisal',
                        'Rangpur' => 'Rangpur', 'Sylhet' =>'Sylhet' ], null, ['class' => 'form-control']) }}
			{{ Form::label('gender', 'Gender:') }}
			{{ Form::select('gender', ['male' => 'Male', 'Female' => 'Female',
                    'others' =>'Others'], null, ['class' => 'form-control']) }}

			{{ Form::label('contact_no', 'Contact Number:') }}
			{{ Form::number('contact_no', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '11')) }}

			{{ Form::checkbox('hidden_status', true, null) }}
			{{ Form::label('hidden_status', "Hide my contact number") }}

			<br>

			{{ Form::label('address', "Full Address:") }}
			{{ Form::textarea('address', null, array('class' => 'form-control', 'required' => '', 'maxlength' =>'1000')) }}

			<div class="well">
				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jobseekerGeneral_Info.show','Cancle', array($info->id), array('class'=>'btn btn-danger btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
					</div>
				</div>

			</div>

		</div>
		<div class="col-md-2">
			{{--<div class="well">--}}
				{{--<dl class="dl-horizontal">--}}
					{{--<dt>Created At :</dt>--}}
					{{--<dd>{{ date('M j, Y h:ia',strtotime($info->created_at)) }}</dd>--}}
				{{--</dl>--}}
				{{--<dl class="dl-horizontal">--}}
					{{--<dt>Last Updated :</dt>--}}
					{{--<dd>{{ date('M j, Y h:ia',strtotime($info->updated_at)) }}</dd>--}}
				{{--</dl>--}}
				{{--<hr>--}}
				{{--<div class="row">--}}
					{{--<div class="col-sm-6">--}}
						{{--{!! Html::linkRoute('jobseekerGeneral_Info.show','Cancle', array($info->id), array('class'=>'btn btn-danger btn-block')) !!}--}}
					{{--</div>--}}
					{{--<div class="col-sm-6">--}}
           			 {{--{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}--}}
					{{--</div>--}}
				{{--</div>--}}

			{{--</div>--}}
		</div>
    {!! Form::close()!!}
	</div>


@endsection
