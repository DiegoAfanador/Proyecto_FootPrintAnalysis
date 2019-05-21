@extends('layout.app')
@section('content')
	<div class="row">
		<div class="col-lg-12 margin-tb text-center">
			<div class="pull-left">
				<h2>Editar Aprendiz</h2>
			</div>
		</div>
	</div>

	
	<form action="{{route('formatos.update',$formato->idM) }}" method="POST">
	
	@csrf
	@method('PUT')
<br>
	<div class="row">
		<div class="col-md-3 mb-3">
			<div class="form-group">
				<strong>Sistema de Salud</strong>
				<select class="custom-select" name="sistemadesaludM" value="{{$formato->sistemadesaludM}}" required title="Eliga una Opción">
					<option value="">Seleccione..</option>
					<option value="Eps">EPS</option>
					<option value="Arl">ARL</option>
				</select>
		<!--	<input type="text" name="sistemadesaludM" value="{{$formato->sistemadesaludM}}" class="form-control" placeholder="Eps"> -->
			</div>
		</div>

    <div class="col-md-2 mb-3">
      <div class="form-group">
        <strong>Eps</strong>
        <!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable sistemadesaludM -->
        <select class="custom-select" name="eps1M"value={{$formato->eps1M}} required title="Eliga una Opción">
              <option value="">Seleccione..</option>
              <option value="AlianSalud">AlianSalud</option>
              <option value="Ambuq">Ambuq</option>
              <option value="Asociación Mutual La Esperanza Asmet Salud ">Asociación Mutual La Esperanza Asmet Salud </option>
              <option value="BARRANQUILLA  SANA  E.P.S. En Liquidación ">BARRANQUILLA  SANA  E.P.S. En Liquidación </option>
              <option value="Bonsalud En Liquidación">Bonsalud En Liquidación</option>
              <option value="Cafesalud">Cafesalud</option>
              <option value="Cajacopi">Cajacopi</option>
              <option value="CAJANAL   EPS">CAJANAL   EPS</option>
              <option value="CALISALUD   E.P.S. ">CALISALUD   E.P.S. </option>
              <option value="Capital Salud EPSS S.A.S. ">Capital Salud EPSS S.A.S. </option>
              <option value="Caprecom EPS">Caprecom EPS</option>
              <option value="CAPRESOCA  EPS">CAPRESOCA  EPS</option>
              <option value="Colseguros   E.P.S.">Colseguros   E.P.S.</option>
              <option value="Comfaboy EPS-CCF de Boyacá ">Comfaboy EPS-CCF de Boyacá </option>
              <option value="Comfacor">Comfacor</option>
              <option value="Comfasucre">Comfasucre</option>
              <option value="Comfenalco  Valle  E.P.S.">Comfenalco  Valle  E.P.S.</option>
              <option value="Comparta">Comparta</option>
              <option value="Compensare">Compensare</option>
              <option value="Coomeva">Coomeva</option>
              <option value="Cooperativa de Salud Comunitaria Comparta ">Cooperativa de Salud Comunitaria "Comparta" </option>
              <option value="Coosalud">Coosalud</option>
              <option value="Corporanonimas en Liquidación">Corporanonimas en Liquidación</option>
              <option value="CruzBlanca">CruzBlanca</option>
              <option value="EmdiSalud">EmdiSalud</option>
              <option value="E.P.S.  CONDOR  S.A. ">E.P.S.  CONDOR  S.A. </option>
              <option value="EPS  CONVIDA">EPS  CONVIDA</option>
              <option value="E.P.S.  de  CALDAS  S.A. ">E.P.S.  de  CALDAS  S.A. </option>
              <option value="EPS  Progr.  Comfenalco  Antioquia ">EPS  Progr.  Comfenalco  Antioquia </option>
              <option value="EPS  Risaralda  Ltda. En Liquidación">EPS  Risaralda  Ltda. En Liquidación</option>
              <option value="EpsSanitas">EpsSanitas</option>
              <option value="E.P.S.  Saludcoop ">E.P.S.  Saludcoop </option>
              <option value="EPS Servicio Occidental de Salud  S.A. - EPS-S.O.S. S.A.edit.blade.php">EPS Servicio Occidental de Salud  S.A. - EPS-S.O.S. S.A.</option>
              <option value="EpsSura">EpsSura</option>
              <option value="Entidad Cooperativa Solidaria de Salud Ecoopsos ">Entidad Cooperativa Solidaria de Salud Ecoopsos </option>
              <option value="Famisanar">Famisanar</option>
              <option value="Fondo de Solidaridad y Garantía Fosyga ">Fondo de Solidaridad y Garantía Fosyga </option>
              <option value="Humana  Vivir  S.A.  E.P.S. ">Humana  Vivir  S.A.  E.P.S. </option>
              <option value="Instituto de Seguros Sociales Eps">Instituto de Seguros Sociales EPS</option>
              <option value="Metropolitana de Salud EPS en Liquidación ">Metropolitana de Salud EPS en Liquidación </option>
              <option value="Mutualser">Mutualser</option>
              <option value="Nueva Eps Contributivo">Nueva Eps Contributivo</option>
              <option value="Nueva Eps Subsidiada">Nueva Eps Subsidiada</option>
              <option value="SaludColmena">SaludColmena</option>
              <option value="SaludTotal">SaludTotal</option>
              <option value="SaludVida">SaludVida</option>
              <option value="Sanitas">Sanitas</option>
              <option value="Salud  Colpatria  E.P.S.">Salud  Colpatria  E.P.S.</option>
              <option value="SELVASALUD  S.A.  E.P.S. ">SELVASALUD  S.A.  E.P.S. </option>
              <option value="Sisben">Sisben</option>
              <option value="SOLSALUD  E.P.S.  S.A.">SOLSALUD  E.P.S.  S.A.</option>
              <option value="SuSalud  EPS ">SuSalud  EPS </option>
              <option value="Unimece">Unimece</option>
          
        </select>
        
       <!-- <input type="text" name="sistemadesaludM"  class="form-control" placeholder="Eps"> -->
      </div>
    </div>
	
	<div class="col-md-2 mb-3">
    <div class="form-group">
      <strong>Arl</strong>
      <!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable eps/arlM -->
      <select class="custom-select" name="arl1M" value={{$formato->arl1M}} required title="Elija una Opción">
              <option value="">Seleccione..</option>
              <option value="ARP Alfa ">ARP Alfa </option>
              <option value="Arpsura">Arpsura</option>
              <option value="Cia de Seguros Bolivarsa">Cia de Seguros Bolivarsa</option>
              <option value="Compañia de Seguros de Vida Aurora">Compañia de Seguros de Vida Aurora</option>
              <option value="LA EQUIDAD SEGUROS DE VIDA ORGANISMO COOPERATIVO  LA EQUIDAD VIDA ">LA EQUIDAD SEGUROS DE VIDA ORGANISMO COOPERATIVO  LA EQUIDAD VIDA </option>
              <option value="Liberty Seguros de Vida">Liberty Seguros de Vida</option>
              <option value="MAPFRE COLOMBIA VIDA SEGUROS SA">MAPFRE COLOMBIA VIDA SEGUROS SA</option>
              <option value="Positiva Compañia de Seguros">Positiva Compañia de Seguros</option>
              <option value="RIESGOS PROFESIONALES COLMENA SA COMPAÑIA DE SEGUROS DE VIDA ">RIESGOS PROFESIONALES COLMENA SA COMPAÑIA DE SEGUROS DE VIDA </option>
              <option value="Seguros de Vida Alfasa">Seguros de Vida Alfasa</option>
              <option value="SEGUROS DE VIDA COLPATRIA SA ">SEGUROS DE VIDA COLPATRIA SA </option>
              <option value="Sura ">Sura </option>
              
            </select>
  <!--    <input type="text" name="epsarlM"  class="form-control" placeholder="Sisben"> -->
    </div>
  </div>


	<div class="col-md-2 mb-3">
		<div class="form-group">
			<strong>Talla</strong>
			<select class="custom-select" name="tallaM" value="{{$formato->tallaM}}" required title="Elija una Opción">
              <option value="">Seleccione..</option>
              <option value="XXS">XXS</option>
              <option value="XS">XS</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="v">XL</option>
              <option value="XXL">XXL</option>
              
            </select>
	<!--	<input type="text" name="tallaM" value="{{$formato->tallaM}}" class="form-control" placeholder="S"> -->
		</div>
	</div>
	<div class="col-md-2 mb-3">
		<div class="form-group">
			<strong>Peso(Kg)</strong>
			<input type="text" name="pesoM" value="{{$formato->pesoM}}"  class="form-control" placeholder="100Kg">
		</div>
	</div>
	
	<div class="col-md-3 mb-3">
		<div class="form-group">
			<strong>Frecuencia Cardiaca(lpm)</strong>
			<input type="text" name="frecuenciacardiacaM" value="{{$formato->frecuenciacardiacaM}}" class="form-control" placeholder="60 Latidos">
		</div>
	</div>
	

	<div class="col-md-3 mb-3">
		<div class="form-group">
			<strong>Frecuencia Respiratoria(rpm)</strong>
			<input type="text" name="frecuenciarespiratoriaM" value="{{$formato->frecuenciarespiratoriaM}}" class="form-control" placeholder="44 Respiraciones">
		</div>
	</div>

    <div class="col-md-2 mb-3">
    <div class="form-group">
      <strong>Tipo de Sangre</strong>
      <!-- es necesario que el input en el value por medio de la variable que recibimos en la vista asignemos que necesitamos el valor de la variable frecuenciarespiratoriaM -->
      <select class="custom-select" name="tipodesangreM" required title="Eliga una Opción">
          <option value="">Seleccione..</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>
    </div>
  </div>
  <br>
  <br>

<!-- tabla de enfermedades -->
    <div class="col-md-12 col-md-offset-5">
    <label for="text">Seleccione las opciones que resulten positivas: </label>
    <table class="table">
      <tbody class="table table-striped table-bordered table-hover table-condensed">

        <td>

          <div class="custom-control custom-checkbox">
            <input value="Enfermedad Congenitas" type="checkbox" name="enfermedadcongénitasM" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Enfermedad Congénitas</label>
          </div>
              </td>

              <td> 
                <div class="custom-control custom-checkbox">
                  <input value="Paperas" type="checkbox" name="paperasM" class="custom-control-input" id="customCheck2">
                    <label class="custom-control-label" name="paperasM" for="customCheck2">Paperas</label>
                  </div>
              </td>

              <td>
                <div class="custom-control custom-checkbox">
                  <input value="Enfermedades de la sangre" type="checkbox" name="enfermedadesdelasangreM" class="custom-control-input" id="customCheck3">
                    <label class="custom-control-label" name="enfermedadesdelasangreM" for="customCheck3">Enfermedades de la sangre</label>
                  </div>
              </td>
          </tr>
          <tr>
            
            <td>
             <div class="custom-control custom-checkbox"> 
              <input value="Traumatismos" type="checkbox" class="custom-control-input" id="customCheck4">
                <label class="custom-control-label" name="traumatismosM" for="customCheck4">Traumatismos</label>
                  </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox"> 
                <input value="Sarampión" type="checkbox" class="custom-control-input" id="customCheck5">
                  <label class="custom-control-label" name="sarampiónM" for="customCheck5">Sarampión</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="Enfermedades de ganglios" type="checkbox" class="custom-control-input" id="customCheck6">
                <label class="custom-control-label" name="enfermedadesdegangliosM" for="customCheck6">Enfermedades de ganglios</label>
              </div> 
            </td>
          </tr>

          <tr>

            <td> 
              <div class="custom-control custom-checkbox">
                <input value="Operaciones" type="checkbox" class="custom-control-input" id="customCheck7">
                <label class="custom-control-label" name="operacionesM" for="customCheck7">Operaciones</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck8">
              <label class="custom-control-label" name="enfermedaddigestivasM" for="customCheck8">Enfermedad digestivas</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck9">
              <label class="custom-control-label" name="enfermedadesdelavistaM" for="customCheck9">Enfermedades de la vista</label>
            </div>
          </td>

        </tr>

        <tr>
          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck10">
              <label class="custom-control-label"name="golpesfuertesM" for="customCheck10">Golpes Fuertes</label>
            </div>
          </td>

          <td>
            <div class="custom-control custom-checkbox">
              <input value="checkbox" type="checkbox" class="custom-control-input" id="customCheck11">
              <label class="custom-control-label" name="hepatitisenfermedaddelhígadoM" for="customCheck11">Hepatitis-enfermedad del hígado</label>
            </div>
          </td>

          <td>
            <div class="custom-control custom-checkbox">
              <input value="Enfermedades glandulares" type="checkbox" class="custom-control-input" id="customCheck12">
              <label class="custom-control-label" name="enfermedadesglandularesM" for="customCheck12">Enfermedades glandulares</label>
            </div></td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck13">
                <label class="custom-control-label" name="lesionesarticularesM" for="customCheck13">Lesiones Articulares</label>
              </div></td>
              <td> <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck14">
                <label class="custom-control-label" name="enfermedadesrenalesM" for="customCheck14">Enfermedades renales</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customCheck15">
                <label class="custom-control-label" name="intervencionesquirúrgicasM" for="customCheck15">Intervenciones quirúrgicas</label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch16">
                <label class="custom-control-label" name="fracturasengincesM" for="customSwitch16">Fracturas-Enginces</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch17">
                <label class="custom-control-label" name="infeccionesurinariasM" for="customSwitch17">Infecciones urinarias</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch18">
                <label class="custom-control-label" name="heridasM" for="customSwitch18">Heridas</label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch19">
                <label class="custom-control-label" name="enfermedaddeloshuesosM" for="customSwitch19">Enfermedad de los Huesos</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch20">
                <label class="custom-control-label" name="enfermedadesdegenitalesM" for="customSwitch20">Enfermedades de genitales</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch22">
                <label class="custom-control-label"name="enfermedadesdelapielM" for="customSwitch22">Enfermedades de la piel</label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch23">
                <label class="custom-control-label" name="enfermedadesmuscularesM" for="customSwitch23">Enfermedades musculares</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch24">
                <label class="custom-control-label" name="enfermedadesneurológicasM" for="customSwitch24">Enfermedades neurológicas</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch25">
                <label class="custom-control-label" name="enfermedadesauditivasM" for="customSwitch25">Enfermedades auditivas</label>
              </div>
            </td>
          </tr>

          <tr>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch26">
                <label class="custom-control-label" name="fiebrereumáticaM" for="customSwitch26">Fiebre reumática</label>
              </div>
            </td>

            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch27">
                <label class="custom-control-label" name="dolordeCabezamareosM" for="customSwitch27">Dolor de Cabeza-mareos</label>
              </div>
            </td>
            <td>
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch28">
                <label class="custom-control-label" name="enfermedadescrónicasM" for="customSwitch28">Enfermedades crónicas</label>
              </div>
            </td>
          </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch29">
                <label class="custom-control-label" name="artritisartrosisM" for="customSwitch29">Artritis-artrosis</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch30">
              <label class="custom-control-label" name="convulsionesepilepsiaM" for="customSwitch30">Convulsiones-epilepsia</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch31">
              <label class="custom-control-label" name="psoriasisM" for="customSwitch31">psoriasis</label>
            </div>
          </td>

        </tr>
          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch32">
                <label class="custom-control-label" name="enfermedadesrespiratoriasM" for="customSwitch32">Enfermedades respiratorias</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch33">
              <label class="custom-control-label" name="perdidadelconocimientoM" for="customSwitch33">Perdida del conocimiento</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch34">
              <label class="custom-control-label" name="consumodealcoholM" for="customSwitch34">Consumo de alcohol </label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch35">
                <label class="custom-control-label" name="enfermedadesarticularesM" for="customSwitch35">Enfermedades articulares</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch36">
              <label class="custom-control-label" name="deshidrataciónM" for="customSwitch36">Deshidratación</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch37">
              <label class="custom-control-label" name="consumodetabacoM" for="customSwitch37">Consumo de tabaco </label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch38">
                <label class="custom-control-label" name="sinusitisotitisanginasM" for="customSwitch38">Sinusitis-otitis-anginas</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch39">
              <label class="custom-control-label" name="enfermedadespsiquiátricasM" for="customSwitch39">Enfermedades psiquiátricas</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch40">
              <label class="custom-control-label" name="enfTransmisiónsexualM" for="customSwitch40">Enf. Transmisión sexual </label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch41">
                <label class="custom-control-label" name="asmaM" for="customSwitch41">Asma</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch42">
              <label class="custom-control-label" name="diabetesM" for="customSwitch42">Diabetes</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch43">
              <label class="custom-control-label" name="transfusionesM" for="customSwitch43">Transfusiones </label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch44">
                <label class="custom-control-label" name="neumoníabronconeumoníaM" for="customSwitch44">Neumonía-bronconeumonía</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch45">
              <label class="custom-control-label" name="chagasM" for="customSwitch45">Chagas</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch46">
              <label class="custom-control-label" name="hemodiálisisM" for="customSwitch46">hemodiálisis</label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch47">
                <label class="custom-control-label" name="varicelaM" for="customSwitch47">Varicela</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch48">
              <label class="custom-control-label" name="soplosencorazónM" for="customSwitch48">Soplos en corazón</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch50">
              <label class="custom-control-label" name="hipertensiónarterialM" for="customSwitch50">Hipertensión arterial</label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch51">
                <label class="custom-control-label" name="rubeolaM" for="customSwitch51">Rubeola</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch52">
              <label class="custom-control-label" name="enfermedadescardiacasM" for="customSwitch52">Enfermedades cardiacas</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch53">
              <label class="custom-control-label" name="hipoglicemiaM" for="customSwitch53">Hipoglicemia</label>
            </div>
          </td>

        </tr>

          <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch54">
                <label class="custom-control-label" name="alérgicoaalgunapicaduradeinsectoM" for="customSwitch54" title="Especificar en observaciones">Alérgico a alguna picadura de insecto</label>
              </div>
            </td>

            <td> <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch55">
              <label class="custom-control-label" name="alérgicoaalgúnmedicamentoM" for="customSwitch55" title="Especificar en observaciones">Alérgico a algún medicamento</label>
            </div>
          </td>

          <td> 
            <div class="custom-control custom-checkbox">
              <input value="checkbox" class="custom-control-input" id="customSwitch56">
              <label class="custom-control-label" name="alérgicoaalgúnalimentoM" for="customSwitch56" title="Especificar en observaciones">Alérgico a algún Alimento</label>
            </div>
          </td>

        </tr> 

        <tr>
            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch57">
                <label class="custom-control-label" name="tomaalgunamedicaciónM" for="customSwitch57" title="Especificar en observaciones">Toma alguna medicación</label>
              </div>
            </td>

            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch57">
              </div>
            </td>

            <td> 
              <div class="custom-control custom-checkbox">
                <input value="checkbox" class="custom-control-input" id="customSwitch57">
              </div>
            </td>

        </tr>
        
      
    </table>
    </div>
    </tbody>
    </table>
    </div>

     <div class="col-md-12 col-md-offset-5">
      <label for='observacionesM'>Observaciones</label>
  
    
    <textarea class="form-control" type="text" value="{{$formato->observacionesM}}" id="observacionesM" name="observacionesM"  rows="3"></textarea>
  </div>
  <br>
  <br>

  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <!-- En href agregamos dentro del metodo route la ruta de redireccion del index-->
      <a class="btn btn-primary" href="{{ route('formatos.index') }}">Atras</a>
        <button type="submit" class="btn btn-primary">Editar</button>
      </div>
      <br>
@endsection