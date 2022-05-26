<?php

namespace App\Http\Controllers;

use App\Models\Duenio;
use Illuminate\Http\Requests;


class DuenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $datos ['duenios']=Duenio::paginate(9);
       return view('duenio.index' ,$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('duenio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDuenioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {

            $campos=[
                'nombre'      => 'required',
                'numTelefono'  => 'required',
                'colonia'      => 'required',
                'calle'        => 'required',
                'numExterior'      => 'required',
                'numInterior'    => 'required',

            ];
    $mensaje=[
    'required'=> 'El :atributo es requerido'
    
    ];
    $this->validate($request, $campos,$mensaje);
        $datosDuenio = request()->except('_token');
        Mascotita::insert($datosDuenio);
        //return response()->json($datosAnimale);
        return redirect('duenio')->with('mensaje','Mascota agregado con exito');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function show(Duenio $duenio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Duenio $duenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDuenioRequest  $request
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosDuenio= request()->except(['_token','_method']);
        duenio::where('id',"=" , $id)->update($datosDuenio);

        $mascota=Duenio::findOrFail($id);
           return view('duenio.edit', compact('duenio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duenio $duenio)
    {
        //
    }
}
