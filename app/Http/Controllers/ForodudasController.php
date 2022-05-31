<?php

namespace App\Http\Controllers;

use App\Models\Forodudas;
use Illuminate\Http\Request;

class ForodudasController extends Controller
{

    public function index()
    {
        $datos ['forodudas']=Forodudas::paginate(7);
        return view('forodudas.index',$datos);
    }


    public function create()
    {
        return view('forodudas.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombre'                 => 'required',
            'descripcion'            => 'required',
            'fechaPublicacion'       => 'required'
        ]);

        Forodudas::create([
            'nombre'            => $request->nombre,
            'descripcion'       => $request->descripcion,
            'fechaPublicacion'  => $request->fechaPublicacion,
        ]);

        return redirect()->route('forodudas.index');
    }


    public function show(Forodudas $forodudas)
    {
        return view('forodudas.show', compact('forodudas'));
    }


    public function edit($id)
    {
        $forodudas=Forodudas::findOrFail($id);

        return view('forodudas.edit', compact('forodudas')) ;
    }


    public function update(Request $request,$id)
    {
        $datosForodudas= request()->except(['_token','_method']);
        forodudas::where('id',"=" , $id)->update($datosForodudas);

        $forodudas=Forodudas::findOrFail($id);
           return view('forodudas.edit', compact('forodudas'));
    }



    public function destroy($id)
    {
      Forodudas::destroy($id);
      return redirect('forodudas')->with ( 'mensaje','Mascota borrada con exito');
     
    }
    
}