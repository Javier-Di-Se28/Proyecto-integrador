<?php

namespace App\Http\Controllers;

use App\Models\Mascotita;
use Illuminate\Http\Request;

class MascotitaController extends Controller
{
    
    public function index()
    {
        $datos ['mascotitas']=Mascotita::paginate(9);
        return view('mascotita.index',$datos);
    }

    
    public function create()
    {
        return view('mascotita.create');
       
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
            'animal'      => 'required',
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
    $datosMascotita = request()->except('_token');
    Mascotita::insert($datosMascotita);
    //return response()->json($datosAnimale);
    return redirect('mascotita')->with('mensaje','Mascota agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Mascotita $mascotita)
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
        $mascota=Mascotita::findOrFail($id);

        return view('mascotita.edit', compact('mascotita'));
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
        $datosMascotita= request()->except(['_token','_method']);
        mascotita::where('id',"=" , $id)->update($datosMascotita);

        $mascota=Mascotita::findOrFail($id);
           return view('mascotita.edit', compact('mascotita'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Mascotita::destroy($id);
      return redirect('mascotita')->with('mensaje','Mascota borrada con exito');
    }
    
}