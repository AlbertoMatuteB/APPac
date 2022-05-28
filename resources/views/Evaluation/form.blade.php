<div class="grid grid-rows-11 gap-y-4 items-center">
    <div class="grid grid-cols-2 grid-rows-1 gap-3 items-center md:container md:mx-auto">
    <div class="font-semibold">
        <span>Habilidad</span>
        <div class="mx-auto max-w-sm text-center flex flex-wrap justify-center">

        <div class="flex items-center mr-4 mb-4">
        <input id="radio1" type="radio" name="radio" class="hidden" checked />
        <label for="radio1" class="flex items-center cursor-pointer">
        <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
        Best choice</label>
        </div>

        <div class="flex items-center mr-4 mb-4">
        <input id="radio2" type="radio" name="radio" class="hidden" />
        <label for="radio2" class="flex items-center cursor-pointer">
        <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
        Second choice</label>
        </div>

        <div class="flex items-center mr-4 mb-4">
        <input id="radio3" type="radio" name="radio" class="hidden" />
        <label for="radio3" class="flex items-center cursor-pointer">
        <span class="w-4 h-4 inline-block mr-1 rounded-full border border-grey"></span>
        Third choice</label>
        </div>

     </div>
        
    </div>
    <div class="font-semibold">
        <span>Comentarios</span>
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
    </div>
    <div class="grid grid-cols-2 grid-rows-1 gap-3 items-center md:container md:mx-auto">
    <div class="font-semibold">
        <span>Habilidad</span>
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
            <option value="1">No lo logra</option>          
            <option value="2">En proceso</option>
            <option value="3">Lo logra</option>  
        </select>
        
    </div>
    <div class="font-semibold">
        <span>Comentarios</span>
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
    </div>
    <div class="grid grid-cols-2 grid-rows-1 gap-3 items-center md:container md:mx-auto">
    <div class="font-semibold">
        <span>Habilidad</span>
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
            <option value="1">No lo logra</option>          
            <option value="2">En proceso</option>
            <option value="3">Lo logra</option>  
        </select>
        
    </div>
    <div class="font-semibold">
        <span>Comentarios</span>
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
    </div>
    <div class="grid grid-cols-2 grid-rows-1 gap-3 items-center md:container md:mx-auto">
    <div class="font-semibold">
        <span>Habilidad</span>
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
            <option value="1">No lo logra</option>          
            <option value="2">En proceso</option>
            <option value="3">Lo logra</option>  
        </select>
        
    </div>
    <div class="font-semibold">
        <span>Comentarios</span>
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
    </div>
    

    @if ($mode != 'Consult')
    <div class="flex items-center justify-center items-center mt-8">
        <button class="rounded-lg bg-blue-appac py-2 px-32" type="submit">
            <a class="text-white text-center">Aceptar</a>
        </button>
    </div>
    @endif
</div>
