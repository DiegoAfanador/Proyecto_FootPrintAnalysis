@extends('layout.app') <!-- extendemos el diseño a la vista del layout -->

@section('content')<!-- creamos un section y de esta forma podemos inyectar el diseño de conteido en el section del layout -->

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
			</div>

			<div class="pull-right">
				<!-- en href dentro del metodo route la ruta de redireccion del create  -->
				<a class="btn btn-success" href="{{ route('nutricions.create') }}">Agregar Nutrición</a>
			</div>

		</div>
	</div>

	<!-- Muestra un mensaje cuando se crea, actualiza y elimina un cliente, donde obtenemos el valor almacenado de message en la session assignado a la variable para luego mostrarlo,esta configuracion viene creado desde el controlador -->

	@if ($message = Session::get('message'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
    @endif

    <table class="table table-bordered">
    	<tr>
    		<th>Comidas</th>
    		<th>Frutas</th>
    		<th>Verduras</th>
    		<th>Proteinas</th>
    		<th>Agua</th>
            <th>Restriccion Alimentaria</th>
    		<th width="280px">Accion</th>
    	</tr>

    <!-- Creamos un foreach para recorrer por medio de una variables los atributos agregados en el modelo asignado en el controlador-->

    @foreach ($nutricions as $nutricion)
    <tr>
    	<!-- Luego por medio de la variables asignamos el atributo que queremos mostrar -->
    	<th scope="row">{{$nutricion->comidaN}}</th>
    	<td> {{ $nutricion->frutaN }} </td>
    	<td> {{ $nutricion->verduraN }} </td>
        <td> {{ $nutricion->proteinaN }} </td>
        <td> {{ $nutricion->aguaN }} </td>
        <td> {{ $nutricion->restriccionN }} </td>
        <td>
        	<!-- Esta parte del formulario agegamos por medio del metodo route la ruta de destruccion del dato o eliminacion, y agregamos seguido la clave primaria de la tabla por medio de la variable recorrido -->
        	<form action="{{ route('nutricions.destroy',$nutricion->idN) }}" method="POST">
            <a class="btn btn-info" href="{{ route('nutricions.show',$nutricion->idN) }}">Ver</a>
            <a class="btn btn-primary" href="{{route('nutricions.edit',$nutricion->idN)}}">Editar</a>

        	@csrf
        	<!-- Metodo oculto para eliminar un recurso-->
        	@method('DELETE')

        	<button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </td>
</tr>
@endforeach
</table>
{!!$nutricions->links() !!}
</div>
@endsection