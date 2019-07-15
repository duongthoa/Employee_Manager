<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link href="{{ URL::asset('css/login.css') }}" rel="stylesheet" media="screen">
</head>
<body>
<div class="container" style="margin-top: 10%">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" action="{{ url('/login') }}" method="post">
						<fieldset>
							<div class="row">
								<div class="center-block">
									<img class="profile-img" src="{{ url('images/user-icon.jpg') }}" alt="User"/>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
                                    @if($errors->has('errorlogin'))
						                <div class="alert alert-danger">
							                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							                {{$errors->first('errorlogin')}}
						                </div>
					                @endif
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> 
											<input class="form-control" id="username" placeholder="Username" name="username" type="text" value="{{ old('username') }}">
										</div>
                                        @if($errors->has('username'))
							                <p style="color:red">{{$errors->first('username')}}</p>
						                @endif
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input class="form-control" id="password" placeholder="Password" name="password" type="password" value="">
										</div>
                                        @if($errors->has('password'))
							                <p style="color:red">{{$errors->first('password')}}</p>
						                @endif
									</div>
                                    {!! csrf_field() !!}
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block" value="Đăng nhập">
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>