<!-- Block user information module NAV  -->
@if(Auth::Check())
	<div class="header_user_info">
		<a href="#" title="View my customer account" rel="nofollow">Your Account</a>
	</div>
	<div class="header_user_info">
		<a class="login" href="{{ URL::Route('getLogout')}}" rel="nofollow" title="Logout to your customer account">
			Sign out
		</a>
	</div>
@else
	<div class="header_user_info">
		<a class="login" href="{{ URL::Route('getCusLogin')}}" rel="nofollow" title="Login to your customer account">
			Sign in
		</a>
	</div>
	<div class="header_user_info">
		<a class="login" href="{{ URL::Route('getCusRegister')}}" rel="nofollow" title="Register to customer account">
			Register
		</a>
	</div>
@endif