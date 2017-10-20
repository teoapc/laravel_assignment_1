<html>
<head>
    <title> Log-in </title>
    <link rel="stylesheet" type="text/css" href="http://localhost/assignment1_final/public/css/custom.css">
    <link href="https://fonts.googleapis.com/css?family=Arvo|Oswald:300" rel="stylesheet">
    <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
<center>
    <h2>RMIT Admin Log-in page</h2>

    <div class="panel-body">
        <form class="form-horizontal" role="form" method="POST" action="{{route('admin.login.submit')}}">
            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
            <div class="form-group{{$errors->has('user_email') ? ' has-error' : ''}}">
                <label for="user_email" class="col-md-4 control-label">E-mail address</label>

                <div class="col-md-6">
                    <input id="user_email" type="email" class="form-control" name="user_email" value="{{old('user_email')}}" required>
                    @if ($errors->has('user_email'))
                        <span class="help-block">
                            <strong>{{$errors->first('user_email')}}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{$errors->has('password') ? ' has-error' : ''}}">
                <label for="password" class="col-md-4 control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{$errors->first('password')}}</strong>
                        </span>
                    @endif
                </div>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>


</center>
</body>
</html>