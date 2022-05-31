<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    
    public function index()
    {
        $datos ['mascotas']=Mascota::paginate(7);
        return view('mascota.index',$datos);
    }

    
    public function create()
    {
        return view('mascota.create');
       
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
            'tipoAnimal'  => 'required',
            'nombre'      => 'required',
            'raza'        => 'required',
            'tamaño'      => 'required',
            'tipoPelo'    => 'required',
            'edad'        => 'required',
            'sexo'        => 'required',
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosMascota = request()->except('_token');
    Mascota::insert($datosMascota);
    //return response()->json($datosAnimale);
    return redirect('mascota')->with('mensaje','Mascota agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota=Mascota::findOrFail($id);

        return view('mascota.edit', compact('mascota'));
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
        $datosMascota= request()->except(['_token','_method']);
        mascota::where('id',"=" , $id)->update($datosMascota);

        $mascota=Mascota::findOrFail($id);
           return view('mascota.edit', compact('mascota'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Mascota::destroy($id);
      return redirect('mascota')->with ( 'mensaje','Mascota borrada con exito');
     
    }
    
}