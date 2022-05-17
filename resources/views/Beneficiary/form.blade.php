<div class="grid grid-rows-11 gap-y-4 items-center">
    <div class="font-semibold">
        <span>Nombre</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="name"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->name}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Fecha de nacimiento</span>
        <input type="date"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="birth_date"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->birth_date}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Género</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="gender"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->gender}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Género</span>
        <select name="gender"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full">
            <option selected></option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
        </select>
    </div>
    <div class="font-semibold">
        <span>Email</span>
        <input type="email"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="email"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->email}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Tipo de sangre</span>
        <select name="blood_type"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full">
            <option selected></option>
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
        <span>Tipo de sangre</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="blood_type"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->blood_type}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Municipio</span>
        <select name="city_id"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full">
            <option selected></option>
            @foreach ($cities as $city)
                <option value="{{$city->name}}">{{$city->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="font-semibold">
        <span>CURP</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="CURP"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->CURP}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="font-semibold">
        <span>Observaciones</span>
        <input type="text"
            class="pl-2 mt-2 bg-default-grey pr-2 py-1 placeholder-slate-400 text-slate-600 relative text-base  border-2 rounded-lg outline-none focus:border-slate-300 w-full"
            name="observations"
            @if($mode=='Edit' || $mode=='Consult' ) value="{{$beneficiary->observations}}" @else @endif
            @if ( $mode=='Consult')
                disabled
            @endif
        />
    </div>
    <div class="flex items-center justify-center items-center">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Aceptar</a>
        </button>
    </div>
</div>
