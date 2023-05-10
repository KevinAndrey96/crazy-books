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
		<h1>Crazy Books</h1>
		
		<form class="form" action="{{ route('users.update',$user)}}" method="POST">
			@csrf
            @method('PUT')
            <label for="">NOMBRE</label>
            <input type="text" placeholder="Ingresa tu nuevo nombre" name="name" value="{{$user->name}}" required autocomplete="name" autofocus>
            <label for="">Correo</label>
            <input type="text" placeholder="Ingresa tu nuevo correo" name="email" value="{{$user->email}}" required autocomplete="email" autofocus>
			<button type="submit" value="Editar">Editar</button>
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
@yield('section')