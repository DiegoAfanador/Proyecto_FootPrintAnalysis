@extends('layout.app')

@section('content')

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Ver Tabulación</h2>
			</div>
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('tabulacions.index') }}"> Back</a>
			</div>
		</div>
	</div>

	<form class="form-group">
		<div class="container bg-white mt-5 rounded">
			<div class="row shadow p-3 mb-5 borde1" >
				<div class="col-3">
					<label class="align-self-center" value="{{ $tabulacion->noDocumentoApdz}}">Número de documento</label>
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
							<td><input class="form-control w-50" type="text" id="faltaImpresionPdTab" value="{{ $tabulacion->faltaImpresionPdTab}}" disabled></td>

							<td><input class="form-control w-50" type="text" id="faltaImpresionPiTab" value="{{ $tabulacion->faltaImpresionPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Continuidad impresión</td>
							<td><input class="form-control w-50" type="text" id="continuidadImpresionPdTab" value="{{ $tabulacion->continuidadImpresionPdTab}}" disabled></td>
							
							<td><input class="form-control w-50" type="text" id="continuidadImpresionPiTab" value="{{ $tabulacion->continuidadImpresionPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida fundamental (CM)</td>
							<td><input class="form-control w-50" type="text" id="medidaFundamentalPdTab" value="{{ $tabulacion->medidaFundamentalPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="medidaFundamentalPiTab" value="{{ $tabulacion->medidaFundamentalPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida X (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoXPdTab" value="{{ $tabulacion->resultadoXPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoXPiTab" value="{{ $tabulacion->resultadoXPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida Y (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoYPdTab" value="{{ $tabulacion->resultadoYPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoYPiTab" value="{{ $tabulacion->resultadoYPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida AY (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoAyPdTab" value="{{ $tabulacion->resultadoAyPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoAyPiTab" value="{{ $tabulacion->resultadoAyPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida TA (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoTaPdTab" value="{{ $tabulacion->resultadoTaPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoTaPiTab" value="{{ $tabulacion->resultadoTaPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Longitud del pie (CM)</td>
							<td><input class="form-control w-50" type="text" id="resultadoLongitudPdTab" value="{{ $tabulacion->resultadoLongitudPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultadoLongitudPiTab" value="{{ $tabulacion->resultadoLongitudPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Medida %X</td>
							<td><input class="form-control w-50" type="text" id="resultado%xPdTab" value="{{ $tabulacion->resultado%xPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="resultado%xPiTab" value="{{ $tabulacion->resultado%xPiTab}}" disabled></td>
						</tr>

						<tr>
							<td>Tipo de pie (%X)</td>
							<td><input class="form-control w-50" type="text" id="tipoPdTab" value="{{ $tabulacion->tipoPdTab}}" disabled></td>
							<td><input class="form-control w-50" type="text" id="tipoPiTab" value="{{ $tabulacion->tipoPiTab}}" disabled></td>
						</tr>

					</table>
				</div>
			</div>
		</div>
	</form>

@endsection