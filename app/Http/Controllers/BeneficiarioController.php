<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Beneficiario as BeneficiarioResource;
use App\Models\Beneficiario as Beneficiario;
use Illuminate\Support\Facades\DB;

class BeneficiarioController extends Controller
{
    //Regresa la colección de todos los beneficiarios.
    public function index()
    {
        $datos['Beneficiario']=BeneficiarioResource::collection(Beneficiario::paginate(10));
        
        return view('beneficiario.index',$datos);
    }

    //Regresa un beneficiario en específico a partir de su id.
    public function show($id)
    {
        $beneficiario=Beneficiario::findOrFail($id);
        
        return view('beneficiario.show',compact('beneficiario'))->with(['id'=>$id]);
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'nombreBeneficiario' => 'required',
            'fechaNacimiento' => 'required',
            'genero' => 'required',
            'curp' => 'required',
            'diagnostico' => 'required',
            'tipoSangre' => 'required',
            'email' => 'required',
            'telefono' => 'required|numeric',
            'municicpio' => 'nullable',
            'observacion' => 'nullable',
            'fecharegistro' => 'nullable',//'required',
        ]);
    

        $beneficiario = Beneficiario::create([
            'nombreBeneficiario' => request('nombreBeneficiario'),
            'fechaNacimiento' => request('fechaNacimiento'),
            'genero' => request('genero'),
            'curp' => request('curp'),
            'diagnostico' => request('diagnostico'),
            'tipoSangre' => request('tipoSangre'),
            'email' => request('email'),
            'telefono' => request('telefono'),
            'municipio' => request('municipio'),
            'observacion' => request('observacion'),
            //'fecharegistro' => request('fecharegistro'),
        ]);

        return redirect('beneficiario')->with('nuevo','Beneficiario Registrado Exitosamente!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {

        return view('beneficiario.create');
    }
    
    public function edit($id)
    {
        $beneficiarioEdit = Beneficiario::find($id);

        return view('beneficiario.create', ["beneficiario" => $beneficiarioEdit]);
    }

    public function update(Request $request, Beneficiario $beneficiario)
    {
        $data =[
        'nombreBeneficiario', 'curp', 'tipoSangre', 'genero', 'email', 'fechaNacimiento', 'telefono', 'direccion', 'observacion',
        ];

        request()->validate([
            'nombreBeneficiario' => 'required',
            'fechaNacimiento' => 'required',
            'genero' => 'required',
            'curp' => 'required',
            'diagnostico' => 'required',
            'tipoSangre' => 'required',
            'email' => 'required',
            'telefono' => 'required|numeric',
            'municipio' => 'required',
            'observacion' => 'nullable',
            'fecharegistro' => 'nullable', //'required',
        ]);

        $beneficiario->update([
            'nombreBeneficiario'  => $request->input('nombreBeneficiario'),
            'curp' => $request->input('curp'),
            'tipoSangre' => $request->input('tipoSangre'),
            'genero'=> $request->input('genero'),
            'email' => $request->input('email'),
            'fechaNacimiento' => $request->input('fechaNacimiento'),
            'telefono' => $request->input('telefono'),
            'direccion' => $request->input('direccion'),
            'observacion' => $request->input('observacion'),
            //'fecharegistro' => $request->input('fecharegistro')
            ]);
        
        return redirect('beneficiario')->with('nuevo','Beneficiario Editado Exitosamente!');
    }

    public function destroy(Beneficiario $beneficiario)
    {
        $success = $beneficiario->delete();
        
        return redirect('beneficiario/')->with('nuevo','Beneficiario Eliminado Exitosamente!');
    }

    // Buscar un beneficiario a partir del request AJAX.
    public function searchBeneficiarios(Request $request)
    {

        $beneficiarios = Beneficiario::where('nombreBeneficiario', 'like', '%'.$request->get('searchQuest'). '%')
                        ->where('genero', 'like', '%'.$request->get('searchQuestGenero'). '%')
                        ->get();
        
        return json_encode( $beneficiarios );
    }

    // Busca un beneficiario con el request AJAX y el parámetro edad.
    public function searchBeneficiariosAge(Request $request)
    {
        $beneficiarios = Beneficiario::where('nombreBeneficiario', 'like', '%'.$request->get('searchQuest'). '%')
                        ->whereBetween('fechaNacimiento', [$request->get('fechaBegin'), $request->get('fechaEnd')])
                        ->where('genero', 'like', '%'.$request->get('searchQuestGenero'). '%')
                        ->get();
        
        return json_encode( $beneficiarios );
    }
}
