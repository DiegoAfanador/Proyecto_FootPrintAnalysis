@extends('layout.app')
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Editar Aprendiz</h2>
			</div>
			<div class="pull-rigth">
				
			<a class="btn btn-primary" href="{{ route('nutricions.index') }}">Atras</a>
				
			</div>
		</div>
	</div>

	
	<form action="{{route('nutricions.update',$nutricion->idN) }}" method="POST">
	
	@csrf
	@method('PUT')

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Comida</strong>
				<input type="text" name="comidaN" value="{{$nutricion->comidaN}}" class="form-control" placeholder="Comida">
			</div>
		</div>
	
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Frutas</strong>
			<input type="text" name="frutaN" value="{{$nutricion->frutaN}}"   class="form-control" placeholder="Frutas">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Verduras</strong>
			<input type="text" name="verduraN" value="{{$nutricion->verduraN}}" class="form-control" placeholder="Verduras">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Proteinas</strong>
			<input type="text" name="proteinaN" value="{{$nutricion->proteinaN}}"  class="form-control" placeholder="proteinas">
		</div>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Agua</strong>
			<select class="custom-select" value="{{$nutricion->aguaN}}" name="aguaN" required title="Elija una Opción">
              <option value="">Seleccione</option>
              <option value="1 Litro"> 1 Litro</option>
              <option value="2 Litros"> 2 Litros</option>
              <option value="3 Litros"> 3 Litros</option>
              <option value="4 Litros"> 4 Litros</option>
              <option value="5 Litros"> 5 Litros</option>
       </select>		
   </div>
	</div>

	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Restriccion Alimentaria</strong>
			<select class="custom-select" value="{{$nutricion->restriccionN}}" name="restriccionN" required title="Elija una Opción">
              <option value="">Seleccione</option>
              <option value="1res"> 1res</option>
              <option value="2res"> 2res</option>
              <option value="3res"> 3res</option>
              <option value="4res"> 4res</option>
              <option value="5res"> 5res</option>
       </select>
	</div>
</div>
</div>
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Editar</button>
	</div>
</div>

</form>
@endsection