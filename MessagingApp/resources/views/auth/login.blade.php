@extends('../partials/nav')

@section('content')

<link type="text/css" rel="stylesheet" href="{{asset('/css/registration.css')}}"/>

@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> There were some problems with your input.<br><br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="voffset9"></div>

<div class="inner cover">

	<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login')  }}" id="msform">
		<!-- fieldsets -->
		<fieldset>
			<h2 class="fs-title">Login</h2>
			<input type="email" name="email" placeholder="Email" />
			<input type="password" name="password" placeholder="Password" />
			<input type="submit" name="submit" class="next action-button" value="Login" />
			<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

		</fieldset>
	</form>

</div>

@endsection