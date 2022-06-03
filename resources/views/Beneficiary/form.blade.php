<div class="grid grid-rows-7 gap-y-4 items-center">
    <div class="flex flex-row space-x-4">
    <div class="font-semibold w-full">
        <span>Nombre</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="name" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->name}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif required autocomplete="name" autofocus>
            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="font-semibold w-full">
        <span>E-Mail</span>
        <input type="email"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="email" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->email}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    </div>
    <div class="flex flex-row space-x-4">
    <div class="font-semibold w-full">
        <span>Fecha de Nacimiento</span>
        <input type="date"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="birth_date" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->birth_date}}" @else @endif
            @if ( $mode=='Consult' ) disabled @endif required autocomplete="birth_date" autofocus>
            @error('birth_date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    @if ($mode =='Consult')
    <div class="font-semibold ">
        <span>Edad</span>
        <input type="number"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="age" value="{{$beneficiary->age()}}" disabled required autocomplete="age" autofocus>
            @error('age')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    @endif
    <div class="font-semibold w-full">
        <span>Género</span>
        <select name="gender"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif required autocomplete="gender" autofocus>
            
            @error('gender')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->gender}}" selected>{{$beneficiary->gender}}</option>
            @else
            <option selected></option>
            @endif
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
    </div>
    <div class="font-semibold w-full">
        <span>Tipo de Sangre</span>
        <select name="blood_type"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif autocomplete="blood_type" autofocus>
            @error('blood_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->blood_type}}" selected>{{$beneficiary->blood_type}}</option>
            @else
            <option selected></option>
            @endif

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
    <div class="font-semibold">
        <span>CURP</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="CURP" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->CURP}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif required autocomplete="CURP" autofocus>
            @error('CURP')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="flex flex-row space-x-4">
    <div class="font-semibold w-full">
        <span>Municipio</span>
        <select name="city_id" id="city_id"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif required autocomplete="city_id" autofocus>
            @error('city_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->city->id}}" selected>{{$beneficiary->city->name}}</option>
            @else
            <option selected></option>
            @endif
            @foreach ($cities as $city)
            <option value="{{$city->id}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="font-semibold w-full">
        <span>Nivel Socioeconómico</span>
        <select name="social_status"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif required autocomplete="social_status" autofocus>
            @error('social_status')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->social_status}}" selected>{{$beneficiary->social_status}}</option>
            @else
            <option selected></option>
            @endif

            <option value="Extrema pobreza">Extrema pobreza</option>
            <option value="Bajo">Bajo</option>
            <option value="Medio">Medio</option>
            <option value="Alto ">Alto </option>
        </select>
    </div>
    </div>
    
    <div class="font-semibold">
        <span>Diagnósticos</span>
        <div x-data="{show: false}"
            class="mt-2 py-px bg-default-grey placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full">
            <a href="#" x-on:click.prevent="show = !show" class="z-10 w-full grid">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="justify-self-end stroke-current inline-block h-6 w-full transform transition duration-150"
                    x-bind:class="{ 'rotate-180': show }">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                </svg>
            </a>
            <div x-show.transition="show"
                class="bg-transparent relative z-20 flex w-full flex-col px-4 py-2 placeholder-slate-400 text-slate-600 whitespace-nowrap outline-none w-full z-10">
                @foreach ($diagnosis as $diagnostic)
                <div>
                    <input type="checkbox" name="diagnosis[]" value="{{$diagnostic->id}}" class="inline-block mr-2"
                        @if($mode=='Edit' || $mode=='Consult' ) 
                            @foreach ($diagnosisBeneficiaries as $diagnosisBeneficiary) 
                                @if ($diagnostic->id==$diagnosisBeneficiary->diagnosis_id)
                                    checked
                                @endif
                            @endforeach 
                        @endif 
                        @if ($mode=='Consult' ) disabled @endif
                        />
                    {{$diagnostic->name}}
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="flex flex-row space-x-4">
    <div class="font-semibold w-full">
        <span>Sistema de Salud</span>
        <select name="health_care"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif required autocomplete="health_care" autofocus>
            @error('health_care')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->health_care}}" selected>{{$beneficiary->health_care}}</option>
            @else
            <option selected></option>
            @endif
            <option value="Público">Público</option>
            <option value="Privado">Privado</option>
        </select>
    </div>
    <div class="font-semibold w-full">
        <span>Especificar Sistema de Salud</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="provider" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->provider}}" @else
            @endif @if ( $mode=='Consult' ) disabled @endif  required autocomplete="provider" autofocus>
            @error('provider')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    </div>
    <div class="font-semibold">
        <span>Observaciones</span>
        <textarea class="pl-3 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="observations" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->observations}}" @else
            @endif @if ( $mode=='Consult' ) disabled @endif  autocomplete="observations" autofocus>@if($mode=='Edit' || $mode=='Consult' ){{$beneficiary->observations}}@endif</textarea>
        @error('observations')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    @if ($mode != 'Consult')
    <div class="flex items-center justify-center items-center mt-8">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Aceptar</a>
        </button>
    </div>
    @endif
</div>
