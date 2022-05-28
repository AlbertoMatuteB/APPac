<div x-data="{ section: 0 }">


    <ul class="flex flex-row justify-end">
        <li class="" @click="section = 0">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ===0? 'bg-white' : 'bg-slate-200'">Sección 1</a>
        </li>
        <li class="" @click="section = 1">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ===1? 'bg-white' : 'bg-slate-200'">Sección 2</a>
        </li>
        <li class="" @click="section = 2">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ===2? 'bg-white' : 'bg-slate-200'">Sección 3</a>
        </li>
        <li class="" @click="section = 3">
            <a href="#" class="h-full w-full py-2 px-4 border-t-2 border-x-2 rounded-t-lg"
                :class="section ===3? 'bg-white' : 'bg-slate-200'">Sección 4</a>
        </li>
    </ul>

    <div x-show="section === 0">
        <h2>Seccion 1</h2>
        <table class="table-auto w-full">
            <thead class="">
                <tr class="bg-transparent">
                    <th class="text-left p-4 font-medium">
                        Actividad
                    </th>
                    <th class="text-center p-4 font-medium">
                        Lo logra
                    </th>
                    <th class="text-center p-4 font-medium">
                        En proceso
                    </th>
                    <th class="text-center p-4 font-medium">
                        No lo logra
                    </th>
                    <th class="text-left px-4 font-medium">
                        Comentario
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) 
                    <tr class="border-y hover:bg-gray-50">
                        <td class="p-4 text-left">
                            Test activity
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="0">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="1">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="2">
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full">
                            </textarea>
                        </td>
                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div x-show="section === 1">
        <h2>Seccion 2</h2>
        <table class="table-auto w-full">
            <thead class="">
                <tr class="bg-transparent">
                    <th class="text-left p-4 font-medium">
                        Actividad
                    </th>
                    <th class="text-center p-4 font-medium">
                        Lo logra
                    </th>
                    <th class="text-center p-4 font-medium">
                        En proceso
                    </th>
                    <th class="text-center p-4 font-medium">
                        No lo logra
                    </th>
                    <th class="text-left px-4 font-medium">
                        Comentario
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) 
                    <tr class="border-y hover:bg-gray-50">
                        <td class="p-4 text-left">
                            Test activity
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="0">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="1">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="2">
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full">
                            </textarea>
                        </td>

                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
    <div x-show="section === 2">
        <h2>Seccion 3</h2>
        <table class="table-auto w-full">
            <thead class="">
                <tr class="bg-transparent">
                    <th class="text-left p-4 font-medium">
                        Actividad
                    </th>
                    <th class="text-center p-4 font-medium">
                        Lo logra
                    </th>
                    <th class="text-center p-4 font-medium">
                        En proceso
                    </th>
                    <th class="text-center p-4 font-medium">
                        No lo logra
                    </th>
                    <th class="text-left px-4 font-medium">
                        Comentario
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) 
                    <tr class="border-y hover:bg-gray-50">
                        <td class="p-4 text-left">
                            Test activity
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="0">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="1">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="2">
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full">
                            </textarea>
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
    <div x-show="section === 3">
        <h2>Seccion 4</h2>
        <table class="table-auto w-full">
            <thead class="">
                <tr class="bg-transparent">
                    <th class="text-left p-4 font-medium">
                        Actividad
                    </th>
                    <th class="text-center p-4 font-medium">
                        Lo logra
                    </th>
                    <th class="text-center p-4 font-medium">
                        En proceso
                    </th>
                    <th class="text-center p-4 font-medium">
                        No lo logra
                    </th>
                    <th class="text-left px-4 font-medium">
                        Comentario
                    </th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < 5; $i++) 
                    <tr class="border-y hover:bg-gray-50">
                        <td class="p-4 text-left">
                            Test activity
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="0">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="1">
                        </td>
                        <td class="p-4 text-center">
                            <input type="radio" class="" name="{{'sameName' . $i}}" value="2">
                        </td>
                        <td class="px-4 h-full w-auto">
                            <textarea rows="2" wrap="hard"
                                class="min-h-full hover:bg-gray-50 outline-none border-none focus:border-indigo-300 w-full">
                            </textarea>
                        </td>
                    </tr>
                @endfor

            </tbody>
        </table>
    </div>
</div>

{{-- <div class="grid grid-rows-11 gap-y-4 items-center">
    





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
</div> --}}
