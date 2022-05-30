<?php

namespace App\Http\Controllers;

use App\Models\Citatir;
use Illuminate\Http\Request;

class CitatirController extends Controller
{
    
    public function index()
    {
        $datos ['citatirs']=Citatir::paginate(9);
        return view('citatir.index',$datos);
    }

    
    public function create()
    {
        return view('citatir.create');
       
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
            'dia'            => 'required',
            'hora'           => 'required',
        ];
$mensaje=[
'required'=> 'El :atributo es requerido'

];
$this->validate($request, $campos,$mensaje);
    $datosCitatir = request()->except('_token');
    Citatir::insert($datosCitatir);
    //return response()->json($datosAnimale);
    return redirect('citatir')->with('mensaje',' agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Usuario  $animale
     * @return \Illuminate\Http\Response
     */
    public function show(Citatir $citatir)
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
        $citatir=Citatir::findOrFail($id);

        return view('citatir.edit', compact('citatir'));
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
        $datosCitatir = request()->except(['_token','_method']);
        citatir::where('id',"=" , $id)->update($datosCitatir);

        $citatir=Citatir::findOrFail($id);
           return view('citatir.edit', compact('citatir'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Citatir  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Citatir::destroy($id);
      return redirect('citatir')->with('mensaje','borrado con exito');
    }
    
}