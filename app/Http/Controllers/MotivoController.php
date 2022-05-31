<?php

namespace App\Http\Controllers;

use App\Models\Motivo;
use Illuminate\Http\Request;

class MotivoController extends Controller
{
    
    public function index()
    {
        $datos ['motivos']=Motivo::paginate(9);
        return view('motivo.index',$datos);
    }

    
    public function create()
    {
        return view('motivo.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $campos=[
            'tipo'      => 'required',
            'descripcion'  => 'required',
            'urgencia'      => 'required',
            
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosMotivo = request()->except('_token');
    Motivo::insert($datosMotivo);
    //return response()->json($datosAnimale);
    return redirect('motivo')->with('mensaje','dato agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Motivo $motivo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $motivo=Motivo::findOrFail($id);

        return view('motivo.edit', compact('motivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosMotivo = request()->except(['_token','_method']);
        motivo::where('id',"=" , $id)->update($datosMotivo);

        $motivo=Motivo::findOrFail($id);
           return view('motivo.edit', compact('motivo'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Motivo::destroy($id);
      return redirect('motivo')->with('mensaje','dato borrada con exito');
    }
    
}