@extends('main')
@section('title', 'Update Priority Information')
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
                                {!! Form::model($priorityValue,['route' =>['jobseeker.priorityValue.update',$priorityValue->id],'method'=>'PUT']) !!}
                                {{ Form::label('contract_type_weight', 'Contract Type:') }}
                                {{ Form::select('contract_type_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Contract Type']) }}
                                <br>
                                
                                {{ Form::label('organization_weight', 'Organization Type:') }}
                                {{ Form::select('organization_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Organization Type']) }}
                                <br>
                                {{ Form::label('job_location_weight', 'Job Location:') }}
                                {{ Form::select('job_location_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Job Location']) }}
                                <br>
                                {{ Form::label('salary_weight', 'Salary:') }}
                                {{ Form::select('salary_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Salary']) }}
                                <br>
                                {{ Form::label('skill_wishlist_weight', 'Skill Wish-List:') }}
                                {{ Form::select('skill_wishlist_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Skill Wish-List']) }}
                                <br>
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
