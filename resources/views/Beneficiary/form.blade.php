<div class="grid grid-rows-11 gap-y-4 items-center">
    <div class="font-semibold">
        <span>Nombre</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="name" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->name}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif />
    </div>
    <div class="font-semibold">
        <span>Fecha de nacimiento</span>
        <input type="date"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="birth_date" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->birth_date}}" @else @endif
            @if ( $mode=='Consult' ) disabled @endif />
    </div>
    @if ($mode =='Consult')
    <div class="font-semibold">
        <span>Edad</span>
        <input type="number"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="age" value="{{$beneficiary->age()}}" disabled />
    </div>
    @endif
    <div class="font-semibold">
        <span>Género</span>
        <select name="gender"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif>
            @if($mode=='Edit' || $mode=='Consult' )
            <option value="{{$beneficiary->gender}}" selected>{{$beneficiary->gender}}</option>
            @else
            <option selected></option>
            @endif
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
    </div>
    <div class="font-semibold">
        <span>Email</span>
        <input type="email"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="email" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->email}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif />
    </div>
    <div class="font-semibold">
        <span>Tipo de sangre</span>
        <select name="blood_type"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif>

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
    <div class="font-semibold">
        <span>Municipio</span>
        <select name="city_id" id="city_id"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            @if ( $mode=='Consult' ) disabled @endif>
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
    <div class="font-semibold">
        <span>CURP</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="CURP" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->CURP}}" @else @endif @if (
            $mode=='Consult' ) disabled @endif />
    </div>
    <div class="font-semibold">
        <span>Diagnosticos</span>
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

    <div class="font-semibold">
        <span>Observaciones</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="observations" @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->observations}}" @else
            @endif @if ( $mode=='Consult' ) disabled @endif />
    </div>

    @if ($mode != 'Consult')
    <div class="flex items-center justify-center items-center mt-8">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Aceptar</a>
        </button>
    </div>
    @endif
</div>
