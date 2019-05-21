@extends('layout.app') <!-- extendemos el diseño a la vista del layout -->

@section('content')<!-- creamos un section y de esta forma podemos inyectar el diseño de conteido en el section del layout -->

<!-- agregamos la ruta del update, funcion que esta en el controlador donde validamos los datos requeridos retornadoos y asignamos el atributo clave a la variable retornada desde la funcion update -->
    <form action="{{route('formatos.store') }}" method="POST">
    <!-- medida de proteccion para volver validar la solicitud del formulario -->
    @csrf
    <!-- campo oculto que nos permite hacer una modificacion en curso del formulario -->

  <body>
      <div class="form-header text-center p-3">
             <h3 class="form-title">Agregar Entidad </h3>                      
           <div class="pull-right">
               <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
           </div>                     
         </div>
         <br>
  
      
        <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<div class="form-group">
			<strong>Entidad:</strong>
			<!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable pesoM -->
			<input type="text" name="agregarE"  class="form-control " placeholder="Nueva eps">
		</div>
	</div>

	


</div>

</body>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <!-- En href agregamos dentro del metodo route la ruta de redireccion del index-->
      <a class="btn btn-primary" href="{{ route('formatos.create') }}">Atras</a>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </div>

                
          
    
</div>

@endsection