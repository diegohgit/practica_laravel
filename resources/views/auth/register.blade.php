@extends('app')

@section('enlace')
	<a href="{{ route('login') }}">Iniciar Sesión</a>
@endsection

@section('titulo')
	Registrar
@endsection

@section('contenido')

<div class="container">
	<form
		action="{{ route('register') }}"
		method="POST"
		novalidate
	>
		@csrf
		<div class="inputContainer">
			<label for="name">Nombre:</label>
			<input 
				id="name"
				name="name"
				type="text"
				value="{{ old('name') }}" 
			/>
			@error('name')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="phone">Teléfono:</label>
			<input 
				id="phone"
				name="phone"
				type="text"
				value="{{ old('phone') }}" 
			/>
			@error('phone')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="adress">Dirección:</label>
			<input 
				id="adress"
				name="adress"
				type="text"
				value="{{ old('adress') }}" 
			/>
			@error('adress')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


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


		<div class="inputContainer">
			<label for="password_confirmation">Confirmar Password:</label>
			<input 
				id="password_confirmation"
				name="password_confirmation"
				type="password"
			/>
			@error('password_confirmation')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<input 
			class="submit"
			type="submit"
			value="Registrar"
		/>

	</form>

</div>

@endsection