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
                                {!! Form::model($priorityValue,['route' =>['company.priorityValue.update',$priorityValue->id],'method'=>'PUT']) !!}
    
                                {{ Form::label('contract_type_weight', 'Contract Type:') }}
                                {{ Form::select('contract_type_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for contract type']) }}
                                <br>
    
                                {{ Form::label('position_weight', 'Position:') }}
                                {{ Form::select('position_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for job position']) }}
                                <br>
                                {{ Form::label('salary_weight', 'Salary:') }}
                                {{ Form::select('salary_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for salary']) }}
                                <br>
                                {{ Form::label('degree_weight', 'Degree:') }}
                                {{ Form::select('degree_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for degree']) }}
                                <br>
                                {{ Form::label('degree_weight', 'Degree:') }}
                                {{ Form::select('degree_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for degree']) }}
                                <br>
                                {{ Form::label('skill_experience_weight', 'Skill and Experience:') }}
                                {{ Form::select('skill_experience_weight', ['1' => '1', '2' => '2',
                                        '3' =>'3', '4' =>'4', '5' =>'5', '6' =>'6', '7' =>'7', '8' =>'8', '9' =>'9', '10' =>'10'], null, ['class' => 'form-control', 'required' => '','placeholder'=> 'Give weight for skill and experience']) }}
                              
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