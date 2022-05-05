
<h1 id="JornadaTitulo" class="bluenefro"><i class="bi bi-person-bounding-box"></i> {{$modo}} Beneficiario</h1>

@if (count($errors)>0)
    
    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach($errors->all() as $error)
           <li> {{$error}} </li>
        @endforeach 
        </ul>
    </div>
    
@endif

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>

<a href="{{ url('beneficiario') }}" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Regresar</a>

<br><br>
<div class="card">
  <div class="card-body">
      <div class= "row">
          <div class= "col-sm">
                <h2 class="card-title bluenefro">{{ $beneficiario->nombreBeneficiario }}</h2>
                <h4 class="font-weight-light">Fecha de Nacimiento: {{ $beneficiario->fechaNacimiento }}</h4>
                <h4 class="font-weight-light">Edad: {{ $beneficiario->age}}</h4>
                <h4 class="font-weight-light">Género: {{ $beneficiario->genero }}</h4>
                <h4 class="font-weight-light">CURP: {{ $beneficiario->curp }}</h4>
                <h4 class="font-weight-light">Diagnóstico: {{ $beneficiario->diagnostico }}</h4>
                <h4 class="font-weight-light">Tipo de Sangre: {{ $beneficiario->tipoSangre }}</h4>
                <h4 class="font-weight-light">Correo Electrónico: {{ $beneficiario->email }}</h4>
                <h4 class="font-weight-light">Número Telefónico: {{ $beneficiario->telefono }}</h4>
                <h4 class="font-weight-light">Municipio: {{ $beneficiario->municipio }}</h4>
                <h4 class="font-weight-light">Observaciones: {{ $beneficiario->observacion }}</h4>
            </div>
        </div>
    <div class= "row">
            
        <div class= "pt-xl-2">
            <a href="{{url('/beneficiario/'.$beneficiario->id.'/edit')}}">
                <button type="button" class="btn btn-primary" style="margin-left: 15px">
                    Editar Beneficiario
                </button>
            </a>
            
        </div>
                
        <div class= "pt-xl-2">
            <form action="{{url('/beneficiario/'.$beneficiario->id)}}" class="d-inline" method="post">
                @method('DELETE')
                @csrf
                    <input type="submit" onclick="return confirm('¿Quiere Borrar Beneficiario?')"  class="btn btn-danger" value="Borrar" style="margin-left: 5px">
            </form>
        </div>
                
        
    </div>
        
  </div>
</div>