@extends('layouts.app')
@section('content')

@if (count($errors)>0)

<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li> {{$error}} </li>
        @endforeach
    </ul>
</div>

@endif

<!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script> -->


<div class="">
    {{-- min-h-full --}}
    <div class="min-h-full flex items-center justify-center py-10 px-16 sm:px-6 lg:px-8">
        <div class="bg-white w-full space-y-10 px-14 py-8 rounded-lg shadow-md">
            <div>
                <h1 class="font-blue-appac text-left text-4xl font-black">{{$modo}} Beneficiario</h2>
            </div>






            <div class="grid grid-cols-4 gap-x-6 gap-y-2 items-center">
                <div>
                    @if ($modo == "Editar")
                    <button class="w-full rounded-lg bg-default-grey text-gray text-center py-2 px-24"
                        href="{{ url('beneficiario') }}">
                        <a class="font-semibold text-gray text-center"
                            href="{{ url('beneficiario/'.$beneficiario->id) }}">
                            < Regresar </a> </button> @elseif ($modo=="Crear" ) <button
                                class="w-full rounded-lg bg-default-grey text-gray text-center py-2 px-24"
                                href="{{ url('beneficiario') }}">
                                <a class="font-semibold text-gray text-center" href="{{ url('beneficiario') }}">
                                    < Regresar </a> </button> @else <button
                                        class="w-full rounded-lg bg-default-grey text-white text-center py-2 px-24"
                                        href="{{ url('beneficiario') }}">
                                        <a class="font-semibold text-gray text-center" href="{{ url('beneficiario') }}">
                                            Regresar </a>
                    </button>
                    @endif
                </div>
                <div></div>
                <div></div>
                <div></div>
            </div>




            <form class="grid grid-rows-11 gap-x-6 gap-y-2 items-center" method="POST" action="/beneficiario">
            @csrf
                <div class="font-semibold pt-2">&nbsp;&nbsp;Nombre
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="nombreBeneficiario"
                        value="{{isset($beneficiario) ? $beneficiario->nombreBeneficiario: ''}}"
                        id="nombreBeneficiario" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Fecha Nacimiento
                    <input type="date" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="fechaNacimiento" value="{{isset($beneficiario) ? $beneficiario->fechaNacimiento: ''}}"
                        id="fechaNacimiento" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Genero
                    <select name="genero" id="genero"
                        class="block appearance-none w-full bg-default-grey border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-3 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300">
                        @if($modo == 'Editar')
                        <option value="{{isset($beneficiario) ? $beneficiario->genero: ''}}" selected>
                        &nbsp;&nbsp;&nbsp;&nbsp;{{$beneficiario->genero}}</option>
                        @endif
                        <option value="Sin Registrar">&nbsp;&nbsp;&nbsp;&nbsp;Sin Registrar</option>
                        <option value="Masculino">&nbsp;&nbsp;&nbsp;&nbsp;Masculino</option>
                        <option value="Femenino">&nbsp;&nbsp;&nbsp;&nbsp;Femenino</option>
                    </select>
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;CURP
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="curp" maxlength="18" value="{{isset($beneficiario) ? $beneficiario->curp: ''}}"
                        id="curp" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Tipo Sangre
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="tipoSangre" maxlength="6" value="{{isset($beneficiario) ? $beneficiario->tipoSangre: ''}}"
                        id="tipoSangre" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Diagnóstico
                    <select name="diagnostico" id="diagnostico"
                        class="block appearance-none w-full bg-default-grey border-gray-200 placeholder-slate-400 text-slate-600 py-2 px-3 pr-8  border-2 rounded-2xl leading-tight focus:outline-none focus:border-slate-300">
                        @if($modo == 'Editar')
                        <option value="{{isset($beneficiario) ? $beneficiario->diagnostico: ''}}" selected>
                        &nbsp;&nbsp;&nbsp;&nbsp;{{$beneficiario->diagnostico}}</option>
                        @endif
                        <option value="Sin Registrar">&nbsp;&nbsp;&nbsp;&nbsp;Sin Registrar</option>
                        <option value="P.C.I.">&nbsp;&nbsp;&nbsp;&nbsp;P.C.I.</option>
                        <option value="Discapacidad Intelectual">&nbsp;&nbsp;&nbsp;&nbsp;Discapacidad Intelectual</option>
                        <option value="Sx Down">&nbsp;&nbsp;&nbsp;&nbsp;Sx Down</option>
                        <option value="Epilepsia">&nbsp;&nbsp;&nbsp;&nbsp;Epilepsia</option>
                        <option value="Hidrocefalia">&nbsp;&nbsp;&nbsp;&nbsp;Hidrocefalia</option>
                        <option value="Paraparesia Hipotónica">&nbsp;&nbsp;&nbsp;&nbsp;Paraparesia Hipotónica</option>
                        <option value="Cuadriparesia Espástica">&nbsp;&nbsp;&nbsp;&nbsp;Cuadriparesia Espástica</option>
                        <option value="Retraso Global del Desarrollo">&nbsp;&nbsp;&nbsp;&nbsp;Retraso Global del Desarrollo</option>
                        <option value="Traumatismo">&nbsp;&nbsp;&nbsp;&nbsp;Traumatismo</option>
                        <option value="Sx Hipotónico">&nbsp;&nbsp;&nbsp;&nbsp;Sx Hipotónico</option>
                        <option value="Sx Dismórfico">&nbsp;&nbsp;&nbsp;&nbsp;Sx Dismórfico</option>
                        <option value="Sx Marfan">&nbsp;&nbsp;&nbsp;&nbsp;Sx Marfan</option>
                        <option value="Hemiparesia">&nbsp;&nbsp;&nbsp;&nbsp;Hemiparesia</option>
                        <option value="Sx Lenox">&nbsp;&nbsp;&nbsp;&nbsp;Sx Lenox</option>
                        <option value="Cuadriparesia Hipotónica">&nbsp;&nbsp;&nbsp;&nbsp;Cuadriparesia Hipotónica</option>
                        <option value="Otro">&nbsp;&nbsp;&nbsp;&nbsp;Otro</option>
                    </select>
                </div>

                <div class="font-semibold pt-2 pt-2">&nbsp;&nbsp;Correo Electrónico
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="email" maxlength="30" value="{{isset($beneficiario) ? $beneficiario->email: ''}}"
                        id="email" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Número Telefónico
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="telefono" maxlength="10" value="{{isset($beneficiario) ? $beneficiario->telefono: ''}}"
                        id="telefono" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Municipio
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="municipio" value="{{isset($beneficiario) ? $beneficiario->municipio: ''}}"
                        id="municipio" />
                </div>

                <div class="font-semibold pt-2">&nbsp;&nbsp;Observaciones
                    <input type="text" placeholder=""
                        class="bg-default-grey px-3 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-2xl outline-none focus:border-slate-300 w-full pl-8"
                        name="observacion" value="{{isset($beneficiario) ? $beneficiario->observacion: ''}}"
                        id="observacion" />
                </div>

                








                <div class="grid grid-cols-3 items-center pt-4">
                    <div>
                    </div>
                    <div>
                        <button class="w-full rounded-lg bg-blue-appac py-2 px-10" type="submit">
                            <a class="text-white text-center">{{$modo}}</a>
                        </button>
                    </div>
                    <div>
                    </div>

                </div>




            </form>
        </div>


    </div>
</div>
</div>
@endsection

{{--
    <script type="text/javascript">
        $('.date').datepicker({  format: 'yyyy-mm-dd' });  
    </script>
--}}
