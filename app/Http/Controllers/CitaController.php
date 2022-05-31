<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;

class CitaController extends Controller
{
   
    public function index()
    {
        $datos ['citas']=Cita::paginate(7);
        return view('cita.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCitaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'hora'  => 'required',
            'fecha'      => 'required',
            
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosCita = request()->except('_token');
    Cita::insert($datosCita);
    //return response()->json($datosAnimale);
    return redirect('cita')->with('mensaje','Mascota agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function show(Cita $cita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cita=Cita::findOrFail($id);

        return view('cita.edit', compact('cita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCitaRequest  $request
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosCita= request()->except(['_token','_method']);
        cita::where('id',"=" , $id)->update($datosCita);

        $cita=Cita::findOrFail($id);
           return view('cita.edit', compact('cita'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cita  $cita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cita::destroy($id);
      return redirect('cita')->with ( 'mensaje','Mascota borrada con exito');
     
    }
    
}
