@extends('layout.app')

@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Editar Tabulación</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('analisis.index') }}"> Back</a>
		</div>
	</div>
</div>


<form action="{{ route('tabulacions.update') }}" method="POST">
	
	@csrf

	method('PUT')

	<form class="form-group">
		<div class="container bg-white mt-5 rounded">
			<div class="row shadow p-3 mb-5 borde1" >
				<div class="col-3">
					<label class="align-self-center">Número de documento</label>
				</div>

				<div class="col-5 ">
					<input type="" class=" form-control" disabled required>
				</div>
			</div>
		</div>
	</form>

	<form class="form-group">
		<div class="container bg-white rounded">
			<div class="row shadow p-3 mb-5 rounded">
				<div class="col">
					<table class="table table-borderless table-hover" >
						<tr>
							<td></td>
							<td>Pie derecho</td>
							<td>Pie izquierdo</td>
						</tr>

						<tr>
							<td>Falta de impresión</td>
							<td><input class="form-control w-50" type="text" id="faltaImpresionPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="faltaImpresionPiTab" disabled></td>
						</tr>

						<tr>
							<td>Continuidad impresión</td>
							<td><input class="form-control w-50" type="text" id="continuidadImpresionPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="continuidadImpresionPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida fundamental (CM)</td>
							<td><input class="form-control w-50" type="text" id="medidaFundamentalPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="medidaFundamentalPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida X (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoXPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoXPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida Y (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoYPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoYPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida AY (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoAyPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoAyPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida TA (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoTaPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoTaPiTab" disabled></td>
						</tr>

						<tr>
							<td>Longitud del pie (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoLongitudPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoLongitudPiTab" disabled></td>
						</tr>

						<tr>
							<td>Medida %X</td>
							<td><input class="form-control w-50" type="text" id="resultado%xPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultado%xPiTab" disabled></td>
						</tr>

						<tr>
							<td>Tipo de pie (%X)</td>
							<td><input class="form-control w-50" type="text" id="tipoPdTab" disabled></td>
							<td><input class="form-control w-50" type="text" id="tipoPiTab" disabled></td>
						</tr>

					</table>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-12 text-center p-4 shadow mb-5 bg-white rounded">
				<button class="btn btn-md boton" type="submit">Registrar</button>
				<!-- <button class="btn btn-md boton">Siguiente</button>			 -->
			</div>
		</div>

	</form>

</form>

@endsection