@extends('layout.app')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2 align="center">Tabulación huella plantar</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{route('tabulacions.create') }}">Agregar Tabulación</a>
			</div>
		</div>
	</div>

	@if ($message = Session::get('message'))
		<div class="alert alert-success">
			<p>{{$message}}</p>
		</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>Fecha</th>
			<th>Número Documento</th>
			<th width="280px">Acción</th>
		</tr>

		@foreach ($tabulacions as $tabulacion)
		<tr>
			<th scope="row">{{$tabulacion->TipoPdTab}}</th>
			<!-- <td>{{$tabulacion->noDocumentoApdz}}</td> -->
			<td>
				
				<form action="{{ route('tabulacions.destroy',$tabulacion->noDocumentoApdz) }}" method="POST">
										
					<a class="btn btn-info" href="{{route('tabulacions.show',$tabulacion->noDocumentoApdz) }}">Ver</a>

					<a class="btn btn-primary" href="{{route('tabulacions.edit',$tabulacion->noDocumentoApdz) }}">Editar</a>

					@csrf

					@method('DELETE')

					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	{!! $tabulacions->links() !!}

@endsection