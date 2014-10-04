@extends('masters.login')

@section('title')
:: login
@stop

@section('content')

{{ Form::open(array('class'=>'smart-form client-form', 'id' => 'login-form')) }}
	<header>
		Login
	</header>

	<fieldset>

		<section>
			<label class="label">E-mail</label>
			<label class="input"> <i class="icon-append fa fa-user"></i>
				<input type="text" name="email" autofocus="true">
				<b class="tooltip tooltip-top-right"><i class="fa fa-user txt-color-teal"></i> Please enter email address/username</b></label>
		</section>

		<section>
			<label class="label">Password</label>
			<label class="input"> <i class="icon-append fa fa-lock"></i>
				<input type="password" name="password">
				<b class="tooltip tooltip-top-right"><i class="fa fa-lock txt-color-teal"></i> Enter your password</b> </label>
			<div class="note">
				<a href="{{ URL::to('forgotpassword') }}">Forgot password?</a>
			</div>
		</section>

		<section>
			<label class="checkbox">
				<input type="checkbox" name="remember" checked="">
				<i></i>Stay signed in</label>
		</section>
	</fieldset>
	<footer>
		<button type="submit" class="btn btn-primary">
			Sign in
		</button>
	</footer>
{{ Form::close() }}

@stop