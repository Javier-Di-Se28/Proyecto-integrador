<?php

namespace App\Http\Controllers;

use App\Models\Usuarito;
use Illuminate\Http\Request;

class UsuaritoController extends Controller
{
    
    public function index()
    {
        $datos ['usuaritos']=Usuarito::paginate(9);
        return view('usuarito.index',$datos);
    }

    
    public function create()
    {
        return view('usuarito.create');
       
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
            'idUsuario'        => 'required',
            'idVeterinaria'    => 'required',
            'correo'           => 'required',
            'contrasenia'      => 'required',
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosUsuarito = request()->except('_token');
    Usuarito::insert($datosUsuarito);
    //return response()->json($datosAnimale);
    return redirect('usuarito')->with('mensaje',' agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Usuarito $usuarito)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Usuario  $animale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuarito=Usuarito::findOrFail($id);

        return view('usuarito.edit', compact('usuarito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Usuario  $animale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosUsuarito = request()->except(['_token','_method']);
        usuarito::where('id',"=" , $id)->update($datosUsuarito);

        $usuarito=Usuarito::findOrFail($id);
           return view('usuarito.edit', compact('usuarito'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Usuarito::destroy($id);
      return redirect('usuarito')->with('mensaje','borrado con exito');
    }
    
}