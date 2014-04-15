<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="csrf-token" content="<?= csrf_token() ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	{{ HTML::script('js/ajaxSetup.js') }}
	{{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}
	{{ HTML::style('css/normalize.css') }}
	{{ HTML::style('css/bootstrap.min.css') }}
	{{ HTML::style('css/bootstrap-theme.min.css') }}
	{{ HTML::script('js/bootstrap.min.js') }}
	{{ HTML::style('css/style.css') }}
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<h1>Card Creator</h1>
				@if(Session::has('message'))
				<p class="alert alert-warning">{{ Session::get('message') }}</p>
				@endif
			</div>
		</div>
			@yield('content')
		</div>
	</div>
</div>
</body>
</html>