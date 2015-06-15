@extends('app')
@section('content')
		<div class="container">
			<div class="content">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					{!! 
						Form::horizontal(),
						ControlGroup::generate(
					        Form::label('email', 'Email address'),
					        Form::text('email','',['placeholder'=>'Enter your email']),''
				  		),
				  		ControlGroup::generate(
					        Form::label('password', 'Password'),
					        Form::text('password','',['placeholder'=>'Enter your password']),''),
				  		ControlGroup::generate(
				  			Button::primary('Login')->submit(), ''),
				  		Form::close()
					 !!}
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
					
				</div>
			</div>
		</div>
@endsection