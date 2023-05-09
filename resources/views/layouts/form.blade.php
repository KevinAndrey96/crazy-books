<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Calm breeze login screen</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


</head>
<body>

<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="form" method="POST" action="{{ route('login')}} ">
			<input type="text" placeholder="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			<input type="password" placeholder="Password" name="password" required autocomplete="current-password">
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="/public/js/script.js"></script>

</body>
</html>