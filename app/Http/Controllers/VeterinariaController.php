<?php

namespace App\Http\Controllers;

use App\Models\Veterinaria;
use App\Http\Requests\StoreVeterinariaRequest;
use App\Http\Requests\UpdateVeterinariaRequest;
use League\CommonMark\Delimiter\Delimiter;

class VeterinariaController extends Controller
{

    public function index()
    {
        return view('veterinarias.index')->with('veterinarias', Veterinaria::all());
    }


    public function create()
    {
        return view('veterinarias.create');
    }


    public function store(StoreVeterinariaRequest $request)
    {
        $request->validate([
            'nombre'           => 'required',
            'sucursal'         => 'required',
            'direccion'        => 'required',
            'servicios'        => 'required',
            'numTelefonico'    => 'required',
            'correo'           => 'required',
            'redesSociales'    => 'required',
            
        ]);

        Veterinaria::create([
            'nombre'             => $request->nombre,
            'sucursal'           => $request->sucursal,
            'direccion'          => $request->direccion,
            'servicios'          => $request->servicios,
            'numTefonico'        => $request->numTelefonico,
            'correo'             => $request->correo,
            'redesSociales'      => $request->redesSociales,
        ]);

        return redirect()->route('veterinaria.index');
    }


    public function show(Veterinaria $veterinaria)
    {
    return view ('veterinarias.show' , compact('veterinaria'));


    }


    public function edit(Veterinaria $veterinaria)
    {
        //
    }


    public function update(UpdateVeterinariaRequest $request, Veterinaria $veterinaria)
    {
        //
    }


    public function destroy(Veterinaria $veterinaria)
    {
        $veterinaria->delete();
        return redirect()->route('Veterinaria.index');
    }
    public function datatable()
{
    $Computadoras = Veterinaria::all();
    return view('veterinarias.datatable', compact('veterinarias'));
}

}

