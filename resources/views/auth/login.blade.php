<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Crazy Books</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="icon" type="image/png" href="{{asset('img/LOGO.png')}}">

</head>
<body>

<!-- partial:index.partial.html -->
<div class="wrapper">
	<div class="container">
		<h1>Crazy Books</h1>

		<form class="form" method="POST" action="{{ route('login')}} ">
			@csrf
			<input type="text" placeholder="Ingresa tu correo" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
			<input type="password" placeholder="Contraseña" name="password" required autocomplete="current-password">
			<button type="submit" id="login-button">Iniciar sesión</button>
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
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script>
document.querySelector('form').addEventListener('submit', function(event) {
  // Previene el envío del formulario para que puedas ver la información en la consola
  event.preventDefault();

  // Obtiene los valores de los campos del formulario

  const email = document.querySelector('input[name="email"]').value;
  const password = document.querySelector('input[name="password"]').value;

  // Imprime los valores en la consola del navegador

  console.log(`Email: ${email}`);
  console.log(`Contraseña: ${password}`);


  // Envía el formulario
  this.submit();
});
  </script>


</body>
</html>
