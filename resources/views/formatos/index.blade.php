@extends('layout.app') <!-- extendemos el diseño a la vista del layout -->

@section('content')<!-- creamos un section y de esta forma podemos inyectar el diseño de conteido en el section del layout -->

	<div class="row">
		<div class="col-lg-12 margin-tb">
			<form>
                <div class="form-header text-center p-3">
                          
                        <h2 align="center">Formato de salud</h2>

                        <div class="pull-right">
                            <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
                        </div>                     
                </div>
              </form>
			<div class="pull-right">
				<!-- en href dentro del metodo route la ruta de redireccion del create  -->
				<a class="btn btn-success" href="{{ route('formatos.create') }}">Registrar Aprendiz</a>
			</div>

		</div>
	</div>

	<!-- Muestra un mensaje cuando se crea, actualiza y elimina un cliente, donde obtenemos el valor almacenado de message en la session assignado a la variable para luego mostrarlo,esta configuracion viene creado desde el controlador -->

	@if ($message = Session::get('message'))
		<div class="alert alert-success">
			<p> {{ $message }} </p>
		</div>
    @endif


    <table class="table table-striped table-bordered table-hover table-condensed ">
    	<tr>
    		<th>Sistema de Salud</th>
    		<th>Eps</th>
            <th>Arl</th>
    		<th>Talla</th>
    		<th>Peso(Kg)</th>
    		<th>Frecuencia Cardiaca(lpm)</th>
            <th>Frecuencia Respiratoria(rpm)</th>
            <th>Tipo de Sangre</th>
            <th>Observaciones</th>
            <th>Enfermedades</th>

    		<th width="280px">Accion</th>
    	</tr>

    <!-- Creamos un foreach para recorrer por medio de una variables los atributos agregados en el modelo asignado en el controlador-->

    @foreach ($formatos as $formato)
    <tr>
    	<!-- Luego por medio de la variables asignamos el atributo que queremos mostrar -->
    	<th scope="row">{{ $formato->sistemadesaludM }}</th>
        <td> {{ $formato->eps1M }} </td>
    	<td> {{ $formato->arl1M }} </td>
    	<td> {{ $formato->tallaM }} </td>
    	<td> {{ $formato->pesoM }} </td>
        <td> {{ $formato->frecuenciacardiacaM }} </td>
        <td> {{ $formato->frecuenciarespiratoriaM }} </td>
        <td> {{ $formato->tipodesangreM }} </td>
        <td> {{ $formato->observacionesM }} </td>
        <td> {{ $formato->EnfermedadesM }} </td>
        <td>
        	<!-- Esta parte del formulario agegamos por medio del metodo route la ruta de destruccion del dato o eliminacion, y agregamos seguido la clave primaria de la tabla por medio de la variable recorrido -->
        	<form action="{{ route('formatos.destroy',$formato->idM) }}" method="POST">
            <a class="btn btn-outline-info" href="{{route('formatos.show',$formato->idM)}}"><i class="far fa-eye"></i></a>
        	<!--<a class="btn btn-info" href="{{ route('formatos.show',$formato->idM) }}">Ver</a>-->
            <a class="btn btn-outline-info" href="{{route('formatos.edit',$formato->idM)}}"><i class="far fa-edit"></i></a>
        	<!--<a class="btn btn-primary" href="{{route('formatos.edit',$formato->idM)}}">Editar</a>-->

        	@csrf
        	<!-- Metodo oculto para eliminar un recurso-->
        	@method('DELETE')

            <button type="submit" class="btn btn-outline-info"><i class="far fa-trash-alt"></i></button>

        	<!--<button type="submit" class="btn btn-danger">Eliminar</button>-->
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
{!!$formatos->links() !!}
</div>
@endsection