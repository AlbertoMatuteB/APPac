<h1 id="JornadaTitulo" class="bluenefro"> <i class="bi bi-person-plus-fill"></i> {{$modo}} Beneficiario</h1>

@if (count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
           <li> {{$error}} </li>
        @endforeach 
        </ul>
    </div>
    
@endif

<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

@if ($modo == "Editar")
    <a href="{{ url('beneficiario/'.$beneficiario->id) }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>
@elseif ($modo == "Crear")
    <a href="{{ url('beneficiario') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>
@else
    <a href="{{ url('beneficiario') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar </a>
@endif

<br><br>

<div class="form-group">
    <label for="nombreBeneficiario">Nombre</label>
    <input type="text" class="form-control" name="nombreBeneficiario" value="{{isset($beneficiario) ? $beneficiario->nombreBeneficiario: ''}}" id="nombreBeneficiario">
</div>

<div class="form-group">
    <label for="fechaNacimiento">Fecha de Nacimiento</label>
    <input class="date form-control" type="date" name="fechaNacimiento" value="{{isset($beneficiario) ? $beneficiario->fechaNacimiento: ''}}" id="fechaNacimiento">    
</div>

<div class="form-group">
    <label for="genero">Género</label>
    <select name="genero" class="custom-select" id="genero">
        @if($modo == 'Editar')
            <option value="{{isset($beneficiario) ? $beneficiario->genero: ''}}" selected>{{$beneficiario->genero}}</option>
        @endif
        <option value="Sin Registrar">-- Sin Registrar --</option>
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
    </select>
</div>

<div class="form-group">
    <label for="curp">CURP</label>
    <input type="text" class="form-control" name="curp" maxlength="18" value="{{isset($beneficiario) ? $beneficiario->curp: ''}}" id="curp">
</div>

<div class="form-group">
    <label for="tipoSangre">Tipo de Sangre</label>
    <input type="text" class="form-control" name="tipoSangre" maxlength="6" value="{{isset($beneficiario) ? $beneficiario->tipoSangre: ''}}" id="tipoSangre">
</div>

<div class="form-group">
    <label for="diagnostico">Diagnóstico</label>
    <select name="diagnostico" class="custom-select" id="diagnostico">
        @if($modo == 'Editar')
            <option value="{{isset($beneficiario) ? $beneficiario->diagnostico: ''}}" selected>{{$beneficiario->diagnostico}}</option>
        @endif
        <option value="Sin Registrar">-- Sin Registrar --</option>
        <option value="P.C.I.">P.C.I.</option>
        <option value="Discapacidad Intelectual">Discapacidad Intelectual</option>
        <option value="Sx Down">Sx Down</option>
        <option value="Epilepsia">Epilepsia</option>
        <option value="Hidrocefalia">Hidrocefalia</option>
        <option value="Paraparesia Hipotónica">Paraparesia Hipotónica</option>
        <option value="Cuadriparesia Espástica">Cuadriparesia Espástica</option>
        <option value="Retraso Global del Desarrollo">Retraso Global del Desarrollo</option>
        <option value="Traumatismo">Traumatismo</option>
        <option value="Sx Hipotónico">Sx Hipotónico</option>
        <option value="Sx Dismórfico">Sx Dismórfico</option>
        <option value="Sx Marfan">Sx Marfan</option>
        <option value="Hemiparesia">Hemiparesia</option>
        <option value="Sx Lenox">Sx Lenox</option>
        <option value="Cuadriparesia Hipotónica">Cuadriparesia Hipotónica</option>
        <option value="Otro">Otro</option>
    </select>
</div>

<div class="form-group">
    <label for="email">Correo Electrónico</label>
    <input type="text" class="form-control" name="email" maxlength="30" value="{{isset($beneficiario) ? $beneficiario->email: ''}}" id="email">
</div>

<div class="form-group">
    <label for="telefono">Número Telefónico</label>
    <input type="text" class="form-control" name="telefono" maxlength="10" value="{{isset($beneficiario) ? $beneficiario->telefono: ''}}" id="telefono">
</div>

<div class="form-group">
    <label for="municipio">Municipio</label>
    <input type="text" class="form-control" name="municipio" value="{{isset($beneficiario) ? $beneficiario->municipio: ''}}" id="municipio">
</div>

<div class="form-group">
    <label for="observacion">Observaciones</label>
    <input type="text" class="form-control" name="observacion" value="{{isset($beneficiario) ? $beneficiario->observacion: ''}}" id="observacion">
</div>

<div class="col text-center">
    <button class="btn btn-success btn-lg" type="submit"><i class="bi bi-pencil-square"></i> {{$modo}}</button>
</div>

{{--
    <script type="text/javascript">
        $('.date').datepicker({  format: 'yyyy-mm-dd' });  
    </script>
--}}