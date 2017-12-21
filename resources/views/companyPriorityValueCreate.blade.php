@extends('main')
@section('title', 'Update Priority Information')
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
                                {!! Form::open(['route' => 'company.priorityValue.store', 'data-parsley-validate' => 'required',]) !!}
    
                                {{ Form::label('contract_type_weight', 'Contract Type:') }}
                                {{ Form::select('contract_type_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Contract Type']) }}
                                <br>
    
                                {{ Form::label('position_weight', 'Organization Type:') }}
                                {{ Form::select('position_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Organization Type']) }}
                                <br>
                                {{ Form::label('salary_weight', 'Job Location:') }}
                                {{ Form::select('salary_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Job Location']) }}
                                <br>
                                {{ Form::label('degree_weight', 'Salary:') }}
                                {{ Form::select('degree_weight', ['1' => '1', '1' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for Salary']) }}
                                <br>
                                {{ Form::label('skill_experience', 'Skill Wish-List:') }}
                                {{ Form::select('skill_experience', ['1' => '1', '1' => '2',
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