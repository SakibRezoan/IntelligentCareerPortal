@extends('main')
@section('title', 'Company Dashboard')
@section('nav')
    @include('partials.company._nav')
@endsection

@section('content')
    <div class="container">
        <div class="row">
            
            @include('partials.companySidebar')
            <div class="col-xs-12 col-sm-9 col-md-8 toppad" >
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Company Infrmation</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3" align="center">
                                <img alt="Company Logo" src="{{ asset('http://127.0.0.1:8000/storage/images/'.$info->logo) }}"
                                     class="img-square img-responsive">
                            </div>

                            <div class=" col-md-9 col-lg-9 ">
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td class="general_info">Company Name:</td>
                                        <td>{{ $info->company_name }}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Company Type:</td>
                                        <td>{{ $info->company_type }}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Date of Establishment:</td>
                                        <td>{{ $info->date_of_establishment}}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Address:</td>
                                        <td>{!! $info->address !!} </td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Contact No:</td>
                                        <td>{{ $info->contact_no }}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Company URL:</td>
                                        <td>{{ $info->url}}</td>
                                    </tr>
                                    <tr>
                                        <td class="general_info">Verification Status:</td>
                                        <td> @if($info->verification_status){{ "Verified" }}
                                            @else {{"Not Verified"}}
                                            @endif
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer" align="center">
                        <a align="left" href="{{ route('companyInfo.edit',$info->id) }}"
                           type="button" title="Edit" class="btn btn-md btn-warning "><i class="glyphicon glyphicon-edit" aria-hidden="true"></i>Update
                        </a>
                        {!! Form::open(['route' => ['companyInfo.delete', $info->id],'method'=>'GET','style' => 'display:inline']) !!}
                        {!! Form::button('<i class="glyphicon glyphicon-trash" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-md',
                                'title' => 'Delete',
                                'onclick'=>'return confirm("Confirm delete?")'
                        )) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
