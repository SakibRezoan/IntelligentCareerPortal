@extends('main')

@section('title', '| View Post')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h3><u>General Information</u></h3>

			<p> First Name : {{ $info->first_name }}</p>
			<p> Last Name :{{ $info->last_name }}</p>
			<p> Date of Birth Name :{{ $info->date_of_birth }}</p>
			<p> Gender :{{ $info->gender }}</p>
			<p> Contact No :{{ $info->contact_no }}</p>
			<p> Address :{{ $info->address }}</p>
			<p>Profile Picture : <img height="240px" width="160px" src="/storage/{{ $info->avatar }}"> </p>

		</div>
		<div class="col-md-4">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created At :</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($info->created_at)) }}</dd>
				</dl>
				<dl class="dl-horizontal">
					<dt>Last Updated :</dt>
					<dd>{{ date('M j, Y h:ia',strtotime($info->updated_at)) }}</dd>
				</dl>
				<hr>

				<div class="row">
					<div class="col-sm-6">
						{!! Html::linkRoute('jobseekerGeneral_Info.edit', 'Edit', array($info->id), array('class' => 'btn btn-primary btn-block')) !!}
					</div>
					<div class="col-sm-6">
						{!! Form::open(['route' => ['jobseekerGeneral_Info.delete', $info->id], 'method' => 'DELETE']) !!}

						{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>


@stop

