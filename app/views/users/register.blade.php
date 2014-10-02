@extends('masters.login')

@section('content')

<header>
	Registration is FREE*
</header>

<fieldset>
	<section>
		<label class="input"> <i class="icon-append fa fa-user"></i>
			<input type="text" name="username" placeholder="Username">
			<b class="tooltip tooltip-bottom-right">Needed to enter the website</b> </label>
	</section>

	<section>
		<label class="input"> <i class="icon-append fa fa-envelope"></i>
			<input type="email" name="email" placeholder="Email address">
			<b class="tooltip tooltip-bottom-right">Needed to verify your account</b> </label>
	</section>

	<section>
		<label class="input"> <i class="icon-append fa fa-lock"></i>
			<input type="password" name="password" placeholder="Password" id="password">
			<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
	</section>

	<section>
		<label class="input"> <i class="icon-append fa fa-lock"></i>
			<input type="password" name="passwordConfirm" placeholder="Confirm password">
			<b class="tooltip tooltip-bottom-right">Don't forget your password</b> </label>
	</section>
</fieldset>

<fieldset>
	<div class="row">
		<section class="col col-6">
			<label class="input">
				<input type="text" name="firstname" placeholder="First name">
			</label>
		</section>
		<section class="col col-6">
			<label class="input">
				<input type="text" name="lastname" placeholder="Last name">
			</label>
		</section>
	</div>

	<div class="row">
		<section class="col col-6">
			<label class="select">
				<select name="gender">
					<option value="0" selected="" disabled="">Gender</option>
					<option value="1">Male</option>
					<option value="2">Female</option>
					<option value="3">Prefer not to answer</option>
				</select> <i></i> </label>
		</section>
		<section class="col col-6">
			<label class="input"> <i class="icon-append fa fa-calendar"></i>
				<input type="text" name="request" placeholder="Request activation on" class="datepicker" data-dateformat='dd/mm/yy'>
			</label>
		</section>
	</div>

	<section>
		<label class="checkbox">
			<input type="checkbox" name="subscription" id="subscription">
			<i></i>I want to receive news and special offers</label>
		<label class="checkbox">
			<input type="checkbox" name="terms" id="terms">
			<i></i>I agree with the <a href="#" data-toggle="modal" data-target="#myModal"> Terms and Conditions </a></label>
	</section>
</fieldset>
<footer>
	<button type="button" onclick="location.href='{{ URL::to('/') }}" class="btn btn-primary">
		Cancel
	</button>
	<button type="submit" class="btn btn-primary">
		Register
	</button>
</footer>

<div class="message">
	<i class="fa fa-check"></i>
	<p>
		Thank you for your registration!
	</p>
</div>

@stop