<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>@yield('title')</title>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <script src="//code.jquery.com/jquery.js"></script>
    
    {{ Html::style('css/styles.css') }}

</head>
<body class="auth-body">

<div class="container-fluid">
    <div class="row-fluid" >
        <div class="col-md-offset-4 col-md-4" id="box">
            <h2 class="auth-header">Company Login</h2>
            <hr>
            <form class="form-horizontal" method="POST" action="{{ route('company.login.submit') }}" id="contact_form">
                <fieldset>
                    {{ csrf_field() }}
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
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <div class="col-md-8 col-lg-offset-2">
                            <div class="form-group">
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                <button type="submit" class="btn btn-success btn-group btn-lg">Login </button>
                            </div>
                            <div class="form-group">
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    <span style="color: aliceblue;font-size: 14px">Forgot Password?</span></a>
                                <a class="btn btn-link" href="{{ route('company.registration') }}">
                                    <span style="color: aliceblue;font-size: 14px">Create an account</span></a>
                            </div>
                        </div>
                    </div>
                
                </fieldset>
            </form>
        </div>
    </div>
</div>
</body>
</html>
