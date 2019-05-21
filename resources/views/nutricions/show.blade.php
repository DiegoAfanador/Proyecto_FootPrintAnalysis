@extends('layout.app')
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
				<h2>Ver cliente</h2>
			</div>
			<div class="pull-rigth">
				
			<a class="btn btn-primary" href="{{ route('nutricions.index') }}">Back</a>
				
			</div>
		</div>
	</div>
     <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		  <div class="form-group">
				<strong>Comida</strong>
				{{$nutricion->comidaN}}
			</div>
	
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>frutas</strong>
				{{$nutricion->frutaN}}
			</div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Verdura</strong>
				{{$nutricion->verduraN}}
			</div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Proteinas</strong>
				{{$nutricion->proteinaN}}
			</div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Agua</strong>
				{{$nutricion->aguaN}}
			</div>
			
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
				<strong>Restriccion Nutricion</strong>
				{{$nutricion->restriccionN}}
			</div>		
		</div>
	</div>

  
@endsection