@extends('app')

@section('enlace')
	<a href="#" class="mr-3">Cerrar sesión</a>
	<a href="{{ route('home') }}">Inicio</a>
@endsection

@section('titulo')
	Ingresar articulo
@endsection

@section('contenido')

<div class="container">
	<form
		action="{{ route('article') }}"
		method="POST"
		novalidate
	>
		@csrf
		<div class="inputContainer">
			<label for="client">Cliente:</label>
			<select 
				id="client"
				name="client"
				type="text"
				class="w-full rounded-md border-2 border-blue-200 m-auto"
			>
				@foreach($clients as $client)
					<option value="{{ $client['clientId'] }}"> 
						{{ $client['clientName'] }}
					</option>
				@endforeach
			</select>

			@error('client')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="phone">Articulo:</label>
			<input 
				id="article"
				name="article"
				type="text"
				value="{{ old('article') }}" 
			/>
			@error('article')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="adress">Detalles:</label>
			<input 
				id="details"
				name="details"
				type="text"
				value="{{ old('details') }}" 
			/>
			@error('details')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<div class="inputContainer">
			<label for="status">Estatus:</label>
			<select 
				id="status"
				name="status"
				type="text"
				value="{{ old('status') }}" 
			>
				<option value="1">En revisión</option>
				<option value="2">En reparación</option>
				<option value="3">En espera de piezas</option>
				<option value="4">Finalizado</option>
			</select>
			@error('status')
				<p class="errorMessage">{{ $message }}</p>
			@enderror
		</div>


		<input 
			class="submit"
			type="submit"
			value="Guardar"
		/>

	</form>

</div>

@endsection