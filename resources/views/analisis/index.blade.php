@extends('layout.app')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2 align="center">Análisis huella plantar</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-success" href="{{route('analisis.create') }}">Agregar Análisis</a>
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

		@foreach ($analisis as $analisi)
		<tr>
			<th scope="row">{{ $analisi->fechaHoraAna}}</th>
			<td>{{$analisi->noDocumentoApdz}}</td>
			<td>
				
				<form action="{{ route('analisis.destroy',$analisi->noDocumentoApdz) }}" method="POST">
										
					<a class="btn btn-info" href="{{route('analisis.show',$analisi->noDocumentoApdz) }}">Ver</a>

					<a class="btn btn-primary" href="{{route('analisis.edit',$analisi->noDocumentoApdz) }}">Editar</a>

					@csrf

					@method('DELETE')

					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	{!! $analisis->links() !!}
	
@endsection
