@extends('layout.app')

@section('content')

<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h2>Editar Análisis</h2>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{ route('analisis.index') }}"> Back</a>
		</div>
	</div>
</div>

<!--enctype="multipart/form-data atributo para poder subir archivos a traves de formularios-->
<form action="{{ route('analisis.update', $analisi->noDocumentoApdz) }}" method="POST"
		enctype="multipart/form-data"> 
	
	@csrf

	@method('PUT')

	<div class="container border bg-white shadow-lg">
		
		<div class="row">

			<div class="col-3" ></div>
												<!-- fixed-top -->
			<div class="col-6  col-sm-12  col-md-12  col-lg-6 bg-white"><h2 align="center">Análisis de Huella plantar</h2>
			</div>
			
			<div class="col-3 borde2"></div>

		</div>


		<div class="row">

			<div class="col-xs-12 cols-sm-12 col-md-12">
				<div class="form-group">
					<strong>Fecha</strong>
					<input class="form-control" type="date" name="fechaHoraAna" value="{{ $analisi->fechaHoraAna}}" placeholder="">
				</div>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Número Documento</strong>
					<input type="text" name="noDocumentoApdz" value="{{ $analisi->noDocumentoApdz}}" class="form-control" placeholder="1005539001">
				</div>
			</div>

			<div class="col-12  col-sm-12  col-md-12   col-lg-12 borde2"></div>
			
		</div>


<!------- Código para el análisis de huella plantar para el pie derecho ------->
		<!-- Pd=Pie derecho-->
		<div class="row">

			<div class="col-3 bg-white" style="text-align: left;">
				<div class="bg-white"><h3 align="center">Coordenadas</h3></div><br>

					<div class="form-group row">
						<label title="punto A" for="coor1PdAna" class="col-sm-4 col-form-label">Punto 1</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor1PdAna" value="{{ $analisi->coor1PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor11PdAna" class="col-sm-4 col-form-label">Punto 1'</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor11PdAna" value="{{ $analisi->coor11PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor2PdAna" class="col-sm-4 col-form-label">Punto 2</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor2PdAna" value="{{ $analisi->coor2PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor22PdAna" class="col-sm-4 col-form-label">Punto 2'</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor22PdAna" value="{{ $analisi->coor22PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor3PdAna" class="col-sm-4 col-form-label">Punto 3</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor3PdAna" value="{{ $analisi->coor3PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor4PdAna" class="col-sm-4 col-form-label">Punto 4</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor4PdAna" value="{{ $analisi->coor4PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor5PdAna" class="col-sm-4 col-form-label">Punto 5</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor5PdAna" value="{{ $analisi->coor5PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor6PdAna" class="col-sm-4 col-form-label">Punto 6</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor6PdAna" value="{{ $analisi->coor6PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor7PdAna" class="col-sm-4 col-form-label">Punto 7</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor7PdAna" value="{{ $analisi->coor7PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor8PdAna" class="col-sm-4 col-form-label">Punto 8</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor8PdAna" value="{{ $analisi->coor8PdAna}}" readonly>
						</div>
					</div>

					<br>
					<br>


				<div class="bg-white"><h3 align="center">Calcular medidas</h3></div><br>

					<div class="form-group row">
						<label for="calculo1PdAna" class="col-sm-4 col-form-label">1 y 1</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo1PdAna" value="{{ $analisi->calculo1PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo2PdAna" class="col-sm-4 col-form-label">2 y 2</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo2PdAna" value="{{ $analisi->calculo2PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo3PdAna" class="col-sm-4 col-form-label">E y F</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo3PdAna" value="{{ $analisi->calculo3PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo4PdAna" class="col-sm-4 col-form-label">G y H</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo4PdAna" value="{{ $analisi->calculo4PdAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo5PdAna" class="col-sm-4 col-form-label">I y J</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo5PdAna" value="{{ $analisi->calculo5PdAna}}" readonly>
						</div>
					</div>

				</div>


			<div class="col-9 bg-white">      <!-- "1240 o 1056" -->
				<canvas id="canvas" width="816" height="1240" style="border:1px solid #000000;"
	   			onmousemove="showCoords(event)" onmouseout="clearCoor()">
				</canvas>

				<form>
				    <div class="form-group">
					    <label for="huellaPdAna"></label>
					    <input type="file" class="form-control-file" name="huellaPdAna">
				    </div>

				    <img src="{{ Storage::url('analisi->huellaAna') }}" >

				    <!-- <img width="200px" src="{{ Storage::url('default.png') }} "> -->

				    <!-- <img width="250px" src="/storage/{{ $analisi->huellaAna}}"> -->

				</form>
			</div>

		</div>



		<!------- Código para el análisis de huella plantar para el pie izquierdo ------->
		<!-- Pi=Pie izquierdo-->
		<div class="row">

			<div class="col-3 bg-white" style="text-align: left;">
				<div class="bg-white"><h3 align="center">Coordenadas</h3></div><br>

					<div class="form-group row">
						<label title="punto A" for="coor1PiAna" class="col-sm-4 col-form-label">Punto 1</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor1PiAna" value="{{ $analisi->coor1PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor11PiAna" class="col-sm-4 col-form-label">Punto 1'</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor11PiAna" value="{{ $analisi->coor11PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor2PiAna" class="col-sm-4 col-form-label">Punto 2</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor2PiAna" value="{{ $analisi->coor2PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor22PiAna" class="col-sm-4 col-form-label">Punto 2'</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor22PiAna" value="{{ $analisi->coor22PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor3PiAna" class="col-sm-4 col-form-label">Punto 3</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor3PiAna" value="{{ $analisi->coor3PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor4PiAna" class="col-sm-4 col-form-label">Punto 4</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor4PiAna" value="{{ $analisi->coor4PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor5PiAna" class="col-sm-4 col-form-label">Punto 5</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor5PiAna" value="{{ $analisi->coor5PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor6PiAna" class="col-sm-4 col-form-label">Punto 6</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor6PiAna" value="{{ $analisi->coor6PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor7PiAna" class="col-sm-4 col-form-label">Punto 7</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor7PiAna" value="{{ $analisi->coor7PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="coor8PiAna" class="col-sm-4 col-form-label">Punto 8</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="coor8PiAna" value="{{ $analisi->coor8PiAna}}" readonly>
						</div>
					</div>

					<br>
					<br>


				<div class="bg-white"><h3 align="center">Calcular medidas</h3></div><br>

					<div class="form-group row">
						<label for="calculo1PiAna" class="col-sm-4 col-form-label">1 y 1</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo1PiAna" value="{{ $analisi->calculo1PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo2PiAna" class="col-sm-4 col-form-label">2 y 2</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo2PiAna" value="{{ $analisi->calculo2PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo3PiAna" class="col-sm-4 col-form-label">E y F</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo3PiAna" value="{{ $analisi->calculo3PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo4PiAna" class="col-sm-4 col-form-label">G y H</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo4PiAna" value="{{ $analisi->calculo4PiAna}}" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label for="calculo5PiAna" class="col-sm-4 col-form-label">I y J</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" name="calculo5PiAna" value="{{ $analisi->calculo5PiAna}}" readonly>
						</div>
					</div>

				</div>


			<div class="col-9 bg-white">      <!-- "1240 o 1056" -->
				<canvas id="canvas" width="816" height="1240" style="border:1px solid #000000;"
	   			onmousemove="showCoords(event)" onmouseout="clearCoor()">
				</canvas>

				<form>
				    <div class="form-group">
					    <label for="huellaPiAna"></label>
					    <input type="file" class="form-control-file" name="huellaPiAna">
				    </div>

				    <img src="{{ Storage::url('analisi->huellaAna') }}" >

				    <!-- <img width="200px" src="{{ Storage::url('default.png') }} "> -->

				    <!-- <img width="250px" src="/storage/{{ $analisi->huellaAna}}"> -->

				</form>
			</div>

		</div>

		<div class="col-12 text-center p-3">
	    	<button class="btn btn-md boton" type="submit">Registrar</button>
    		<button href="" type="button" class="btn btn-md boton">Siguiente</button> 
	    </div>

	    <!-- <div class="col-xs-12 col-sm-12 col-md-12 text-center">
			<button type="submit" class="btn btn-primary">Submit</button>
		</div> -->

	</div>

	<script>
	//carga la imagen en el canvas
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	var img = new Image();
	img.src = "{{ Storage::url('analisi->huellaAna') }}";
	// img.src = 'data:/storage/Ndzmjy51c684xUqJ5Y0GZ0DRKnatgYZL6VhqMozO.jpeg';

	// document.write('<img src=' + imagen + ' width="50" height="50">');
	
	// <img src="/storage/{{ $analisi->huellaAna}}">
	// img.src="/storage/{{ $analisi->huellaAna}}";
	// img.src = "{{asset('img/huellaOficio.jpg')}}";
	// <div class="col-4"><img class="float-right" src="{{asset('img/HeaderSena2.png')}}"></div>
	// Importante el onload
	img.onload = function(){
	ctx.drawImage(img, 0, 0, 816, 1240);
	}
	</script>
</form>

@endsection