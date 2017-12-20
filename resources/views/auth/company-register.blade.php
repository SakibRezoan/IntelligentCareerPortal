<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    
    <!-- Bootstrap -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    {{ Html::style('css/styles.css') }}

</head>
<body class="auth-body">

<div class="container-fluid">
    <div class="row-fluid" >
        <div class="col-md-offset-4 col-md-4" id="box">
            <h2 class="auth-header">Company Registration</h2>
            <hr>
            <form class="form-horizontal" method="POST" action="{{ route('company.register.submit') }}" id="contact_form">
                <fieldset>
                    {{ csrf_field() }}
    
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <div class="col-offset-1 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                <input id="name" placeholder="Enter Company Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="col-offset-1 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                <input id="email" placeholder="Enter Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="col-offset-1 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input placeholder="Enter Password" id="password" type="password" class="form-control" name="password" required>
                                <span toggle="#password"class="input-group-addon toggle-password"><i class="glyphicon glyphicon-eye-open"></i></span>
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-offset-1 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input placeholder="Confirm Password" id="password-confirm"
                                       type="password" class="form-control" name="password_confirmation" required>
                                <span toggle="#password-confirm"class="input-group-addon toggle-password"><i class="glyphicon glyphicon-eye-open"></i></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-6 col-lg-offset-3">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success btn-group btn-lg btn-block">Register</button>
                                <a class="btn btn-link text-center" href="{{ route('company.login') }}" data-toggle="modal">
                                    <h4 style="color: aliceblue;"> Member Already?Login</h4></a>
                            </div>
                        </div>
                    </div>
                
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
<script>
    $(".toggle-password").click(function() {

        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });
</script>
</html>