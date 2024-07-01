@extends('app')

@section('enlace')
	<a href="#">Iniciar Sesión</a>
@endsection

@section('titulo')
	Iniciar Sesión
@endsection

@section('contenido')

<div class="container">

    @if(session('message'))
        <p class="errorMessage">{{ session('message') }}</p>
    @endif

	<form
		action="{{ route('login') }}"
		method="POST"
		novalidate
	>
		@csrf

		<div class="inputContainer">
			<label for="email">Correo:</label>
			<input 
				id="email"
				name="email"
				type="text"
				value="{{ old('email') }}" 
			/>
			@error('email')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="password">Password:</label>
			<input 
				id="password"
				name="password"
				type="password" 
			/>
			@error('password')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>

		<input 
			class="submit"
			type="submit"
			value="Iniciar Sesión"
		/>

	</form>

</div>

@endsection