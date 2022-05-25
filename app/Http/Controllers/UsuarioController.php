<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()
    {
        $datos ['usuarios']=Usuario::paginate(9);
        return view('usuario.index',$datos);
    }

    
    public function create()
    {
        return view('usuario.create');
       
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
            'correo'           => 'required',
            'contrasenia'      => 'required',
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosUsuario = request()->except('_token');
    Mascota::insert($datosUsuario);
    //return response()->json($datosAnimale);
    return redirect('usuario')->with('mensaje','Mascota agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Usuario $usuario)
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
        $usuario=Usuario::findOrFail($id);

        return view('usuario.edit', compact('usuario'));
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
        $datosUsuario = request()->except(['_token','_method']);
        usuario::where('id',"=" , $id)->update($datosUsuario);

        $usuario=Usuario::findOrFail($id);
           return view('usuario.edit', compact('usuario'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Usuario::destroy($id);
      return redirect('usuario')->with('mensaje','Mascota borrada con exito');
    }
    
}