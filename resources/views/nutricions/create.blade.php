<!--- La variable $cliente se encuentra en el index la cual fue creada por medio de un foreach que recorre la variable creada en el controlador en la parte del index, la cual tiene asignado el modelo como tal! -->

@extends('layout.app') <!-- extendemos el diseño a la vista del layout -->

@section('content') <!-- creamos un section y de esta forma podemos inyectar el diseño en el section del layout-->
	

	<!-- agregamos la ruta del update, funcion que esta en el controlador donde validamos los datos requeridos retornadoos y asignamos el atributo clave a la variable retornada desde la funcion update -->
	<form action="{{route('nutricions.store') }}" method="POST">
	<!-- medida de proteccion para volver validar la solicitud del formulario -->
	@csrf
	<!-- campo oculto que nos permite hacer una modificacion en curso del formulario -->
     <body>
<br>
    <div class="container border" >
      <div class="form-header text-center p-3">
             <h3 class="form-title"><i class="fas fa-file-medical"></i> Nutrición </h3>                      
           <div class="pull-right">
               <h3 class="form-title"><span class="glyphicon glyphicon-pencil"></span></h3>
           </div>                     
         </div>
         <br>
  
      <div class="form-body">

   <!-- se crea una clase para fecha de registro -->         
            <div class="form-group row">
                    <div class="input-group">
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-user"></span>
                      </div>
                      <label for="fechaRegistro" class="col-sm-3 col-form-label text-left" > Fecha de Registro:
                      </label>
                      <form name="formulario" method="post">
                      <input type="date" name="fechaRegistro" min="2010-03-25" max="2020-05-25" class="form-control col-sm-8" required title="Ingrese la fecha del registro">
                      </form>
                    </div>
                    <span class="help-block" id="error"></span>
            </div>
            <br>
        </div>



   <div class="container border" >

     <div class="col-md-12 col-md-offset-5">
    <label for="text">



Seleccione según corresponda el Número de comidas diarias:   </label>
    <table class="table">
      <tbody class="table table-striped table-bordered table-hover table-condensed">

        <td>

          <div class="custom-control custom-checkbox">
            <input value="Enfermedad Congenitas" type="checkbox" name="enfermedadcongénitasM" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Desayuno</label>
          </div>
              </td>

              <td> 
                <div class="custom-control custom-checkbox">
                  <input value="Paperas" type="checkbox" name="paperasM" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" name="paperasM" for="customCheck2">Media</label>
                  </div>
              </td>

              <td>
                <div class="custom-control custom-checkbox">
                  <input value="Enfermedades de la sangre" type="checkbox" name="enfermedadesdelasangreM" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" name="enfermedadesdelasangreM" for="customCheck3">Almuerzo</label>
                  </div>
              </td>
            
            <td>
             <div class="custom-control custom-checkbox"> 
              <input value="Traumatismos" type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" name="traumatismosM" for="customCheck4">Merienda</label>
                  </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox"> 
                <input value="Sarampión" type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" name="sarampiónM" for="customCheck5">Comida</label>
             </div>
            </td>
 
            </td>
          </tr>
         </tbody>
       </table>
     </div>
   </div>
 </body>
</form>
<div class="container border" >
  

    	<!-- tabla de enfermedades -->
    <div class="col-md-12 col-md-offset-5">
      <br>
    <label for="text">Seleccione las Frutas que ingiere: </label>
    <table class="table">
      <tbody class="table table-striped table-bordered table-hover table-condensed">
        </div>
         <br>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="Operaciones" type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" name="operacionesM" for="customCheck6">Arándano</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck7">
              <label class="custom-control-label" name="enfermedaddigestivasM" for="customCheck7">Mandarina</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck8">
              <label class="custom-control-label" name="enfermedadesdelavistaM" for="customCheck8">Sandía </label>
            </div>
          </td>

        
          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label"name="golpesfuertesM" for="customCheck9">Mango </label>
            </div>
          </td>


          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label" name="hepatitisenfermedaddelhígadoM" for="customCheck10">Cereza</label>
            </div>
          </td>

          <td>
            <div class="custom-control custom-checkbox">
              <input value="Enfermedades glandulares" type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" name="enfermedadesglandularesM" for="customCheck11">Melocotón</label>
            </div></td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck12">
                <label class="custom-control-label" name="lesionesarticularesM" for="customCheck12">Uva</label>
              </div></td>
              <td> <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck13">
                <label class="custom-control-label" name="enfermedadesrenalesM" for="customCheck13">Pitahaya</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck14">
                <label class="custom-control-label" name="intervencionesquirúrgicasM" for="customCheck14">Frambuesa </label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch15">
                <label class="custom-control-label" name="fracturasengincesM" for="customSwitch15">Naranja</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch16">
                <label class="custom-control-label" name="infeccionesurinariasM" for="customSwitch16">Coco </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch17">
                <label class="custom-control-label" name="heridasM" for="customSwitch17">Papaya</label>
              </div>
            </td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch18">
                <label class="custom-control-label" name="enfermedaddeloshuesosM" for="customSwitch18">Ciruela</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch19">
                <label class="custom-control-label" name="enfermedadesdegenitalesM" for="customSwitch19">Pera</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch20">
                <label class="custom-control-label"name="enfermedadesdelapielM" for="customSwitch20">Durazno</label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch21">
                <label class="custom-control-label" name="enfermedadesmuscularesM" for="customSwitch21">Lulo</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch22">
                <label class="custom-control-label" name="enfermedadesneurológicasM" for="customSwitch22">Guayaba </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch23">
                <label class="custom-control-label" name="enfermedadesauditivasM" for="customSwitch23">Fresa </label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch24">
                <label class="custom-control-label" name="fiebrereumáticaM" for="customSwitch24">Melón</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch25">
                <label class="custom-control-label" name="dolordeCabezamareosM" for="customSwitch25">Kiwi </label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch26">
                <label class="custom-control-label" name="enfermedadescrónicasM" for="customSwitch26">Piña</label>
              </div>
            </td>
      
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch27">
                <label class="custom-control-label" name="artritisartrosisM" for="customSwitch27">Manzana</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch28">
              <label class="custom-control-label" name="convulsionesepilepsiaM" for="customSwitch28">Granadilla</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch29">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch29">Lulo</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch30">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch30">Lulo</label>
            </div>
          </td>
          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
         </div>
            </td>

            <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch32">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch32">Lulo</label>
         </div>
            </td>
 
            </td>
          </tr>
         </tbody>
       </table>
     </div>
   </div>
 </body>
</form>




<div class="container border" >
  

      <!-- tabla de enfermedades -->
    <div class="col-md-12 col-md-offset-5">
      <br>
    <label for="text">Seleccione las Verduras que ingiere: </label>
    <table class="table">
      <tbody class="table table-striped table-bordered table-hover table-condensed">
        </div>
         <br>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="Operaciones" type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" name="operacionesM" for="customCheck6">Acelga </label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck7">
              <label class="custom-control-label" name="enfermedaddigestivasM" for="customCheck7">Arveja </label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck8">
              <label class="custom-control-label" name="enfermedadesdelavistaM" for="customCheck8">Calabaza </label>
            </div>
          </td>

        
          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label"name="golpesfuertesM" for="customCheck9">Coliflor </label>
            </div>
          </td>


          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label" name="hepatitisenfermedaddelhígadoM" for="customCheck10">Habichuela</label>
            </div>
          </td>

          <td>
            <div class="custom-control custom-checkbox">
              <input value="Enfermedades glandulares" type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" name="enfermedadesglandularesM" for="customCheck11">Repollo</label>
            </div></td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck12">
                <label class="custom-control-label" name="lesionesarticularesM" for="customCheck12">Batata</label>
              </div></td>
              <td> <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck13">
                <label class="custom-control-label" name="enfermedadesrenalesM" for="customCheck13">Alcachofa </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck14">
                <label class="custom-control-label" name="intervencionesquirúrgicasM" for="customCheck14">Apio</label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch15">
                <label class="custom-control-label" name="fracturasengincesM" for="customSwitch15">Champiñón </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch16">
                <label class="custom-control-label" name="infeccionesurinariasM" for="customSwitch16">Espinaca </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch17">
                <label class="custom-control-label" name="heridasM" for="customSwitch17">Lechuga</label>
              </div>
            </td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch18">
                <label class="custom-control-label" name="enfermedaddeloshuesosM" for="customSwitch18">Tomate</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch19">
                <label class="custom-control-label" name="enfermedadesdegenitalesM" for="customSwitch19">Rabano</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch20">
                <label class="custom-control-label"name="enfermedadesdelapielM" for="customSwitch20">Berenjena </label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch21">
                <label class="custom-control-label" name="enfermedadesmuscularesM" for="customSwitch21">Brócoli</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch22">
                <label class="custom-control-label" name="enfermedadesneurológicasM" for="customSwitch22">Calabacín </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch23">
                <label class="custom-control-label" name="enfermedadesauditivasM" for="customSwitch23">Frijol  </label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch24">
                <label class="custom-control-label" name="fiebrereumáticaM" for="customSwitch24">Pepino</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch25">
                <label class="custom-control-label" name="dolordeCabezamareosM" for="customSwitch25">Zanahoria </label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch26">
                <label class="custom-control-label" name="enfermedadescrónicasM" for="customSwitch26">Coles</label>
              </div>
            </td>
      
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch27">
                <label class="custom-control-label" name="artritisartrosisM" for="customSwitch27">Manzana</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch28">
              <label class="custom-control-label" name="convulsionesepilepsiaM" for="customSwitch28">Granadilla</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch29">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch29">Lulo</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch30">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch30">Lulo</label>
            </div>
          </td>
          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
         </div>
            </td>
            <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch32">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch32">Lulo</label>
         </div>
            </td>

            </td>
          </tr>
         </tbody>
       </table>
     </div>
   </div>
 </body>
</form>


  <div class="container border" >
  

      <!-- tabla de enfermedades -->
    <div class="col-md-12 col-md-offset-5">
      <br>
    <label for="text">Seleccione las Proteinas que ingiere: </label>
    <table class="table">
      <tbody class="table table-striped table-bordered table-hover table-condensed">
        </div>
         <br>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="Operaciones" type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" name="operacionesM" for="customCheck6">Huevos</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck7">
              <label class="custom-control-label" name="enfermedaddigestivasM" for="customCheck7">Salmón</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label" name="enfermedadesdelavistaM" for="customCheck9">Atún </label>
            </div>
          </td>

        
          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label"name="golpesfuertesM" for="customCheck10">Pollo </label>
            </div>
          </td>


          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" name="hepatitisenfermedaddelhígadoM" for="customCheck11">Pavo</label>
            </div>
          </td>

          <td>
            <div class="custom-control custom-checkbox">
              <input value="Enfermedades glandulares" type="checkbox" class="custom-control-input" id="customCheck12">
              <label class="custom-control-label" name="enfermedadesglandularesM" for="customCheck12">Soja</label>
            </div></td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck13">
                <label class="custom-control-label" name="lesionesarticularesM" for="customCheck13">Avena</label>
              </div></td>
              <td> <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck14">
                <label class="custom-control-label" name="enfermedadesrenalesM" for="customCheck14">Pitahaya</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck15">
                <label class="custom-control-label" name="intervencionesquirúrgicasM" for="customCheck15">Frambuesa </label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch16">
                <label class="custom-control-label" name="fracturasengincesM" for="customSwitch16">Naranja</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch17">
                <label class="custom-control-label" name="infeccionesurinariasM" for="customSwitch17">Coco </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch18">
                <label class="custom-control-label" name="heridasM" for="customSwitch18">Papaya</label>
              </div>
            </td>
          
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch19">
                <label class="custom-control-label" name="enfermedaddeloshuesosM" for="customSwitch19">Ciruela</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch20">
                <label class="custom-control-label" name="enfermedadesdegenitalesM" for="customSwitch20">Pera</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch22">
                <label class="custom-control-label"name="enfermedadesdelapielM" for="customSwitch22">Durazno</label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch23">
                <label class="custom-control-label" name="enfermedadesmuscularesM" for="customSwitch23">Lulo</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch24">
                <label class="custom-control-label" name="enfermedadesneurológicasM" for="customSwitch24">Guayaba </label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch25">
                <label class="custom-control-label" name="enfermedadesauditivasM" for="customSwitch25">Fresa </label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch26">
                <label class="custom-control-label" name="fiebrereumáticaM" for="customSwitch26">Melón</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch27">
                <label class="custom-control-label" name="dolordeCabezamareosM" for="customSwitch27">Kiwi </label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch28">
                <label class="custom-control-label" name="enfermedadescrónicasM" for="customSwitch28">Piña</label>
              </div>
            </td>
      
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch29">
                <label class="custom-control-label" name="artritisartrosisM" for="customSwitch29">Manzana</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch30">
              <label class="custom-control-label" name="convulsionesepilepsiaM" for="customSwitch30">Granadilla</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
            </div>
          </td>
          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
         </div>
            </td>
            <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">Lulo</label>
         </div>
            </td>
 
            </td>
          </tr>
         </tbody>
       </table>
     </div>
   </div>
 </body>
</form>





 





	
	
      <div class="container border" >


	<div class="col-md-12 col-md-offset-5">
		<div class="form-group">
      <br>
			<label>Cuanta Agua Consume</label>
			<!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable apellidoCli  -->
	 		<select class="custom-select" name="aguaN" required title="Elija una Opción">
              <option value="">Seleccione</option>
              <option value="1 Litro"> 1 Litro</option>
              <option value="2 Litros"> 2 Litros</option>
              <option value="3 Litros"> 3 Litros</option>
              <option value="4 Litros"> 4 Litros</option>
              <option value="5 Litros"> 5 Litros</option>
       </select>
	</div>
</div>

<div class="col-md-12 col-md-offset-5">
		<div class="form-group">
			<label>Tiene Alguna Restriccion Alimentaria</label>
			 <!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable apellidoCli --> 
		 	<select class="custom-select" name="restriccionN" required title="Elija una Opción">
              <option value="">Seleccione</option>
              <option value="1res"> 1res</option>
              <option value="2res"> 2res</option>
              <option value="3res"> 3res</option>
              <option value="4res"> 4res</option>
              <option value="5res"> 5res</option>
       </select>
	</div>
</div>





	     <div class="col-xs-12 col-sm-12 col-md-12 text-center">
		<button type="submit" class="btn btn-primary">Registrar</button>
	</div>
	<div class="row">
		<div class="col-lg-12 margin-tb">
			<div class="pull-left">
			</div>
			<div class="pull-rigth"> <!-- 
				 En href agregamos dentro del metodo route la ruta de redireccion del index -->
			<a class="btn btn-primary" href="{{ route('nutricions.index') }}">Atras</a>
				
			</div>
		</div>
	</div>
</div>
</div>
</form> 
@endsection