<?php

namespace App\Http\Controllers;

use App\Models\Estado;
use Illuminate\Http\Request;

class EstadoController extends Controller
{
    
    public function index()
    {
        $datos ['estados']=Estado::paginate(9);
        return view('estado.index',$datos);
    }

    
    public function create()
    {
        return view('estado.create');
       
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
            'hora'         ,
            'dia'           ,
            'tratamiento'  ,
            'observaciones' 
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosEstado = request()->except('_token');
    Estado::insert($datosEstado);
    //return response()->json($datosAnimale);
    return redirect('estado')->with('mensaje','Estado agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
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
        $status=Estado::findOrFail($id);

        return view('estado.edit', compact('estado'));
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
        $datosEstado= request()->except(['_token','_method']);
        estado::where('id',"=" , $id)->update($datosEstado);

        $estado=Estado::findOrFail($id);
           return view('estado.edit', compact('estado'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Estado::destroy($id);
      return redirect('estado')->with('mensaje','Status borrado con exito');
    }
    
}