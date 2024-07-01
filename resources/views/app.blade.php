<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('titulo')</title>
	@vite('resources/css/app.css')
</head>
<body>
	<header>
		@yield('enlace')
	</header>

	<h2>@yield('titulo')</h2>


	<main>
		@yield('contenido')
	</main>
</body>
</html>