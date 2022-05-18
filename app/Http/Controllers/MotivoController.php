<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Http\Requests\StoreMotivoRequest;
use App\Http\Requests\UpdateMotivoRequest;
use App\Models\Veterinaria;
use League\CommonMark\Delimiter\Delimiter;

class MotivoController extends Controller
{

    public function index()
    {
        return view('veterinaria.index')->with('veterinaria', Veterinaria::all());
    }


    public function create()
    {
        return view('veterinaria.create');
    }


    public function store(StoreMotivoRequest $request)
    {
        $request->validate([
            'descripcion'       => 'required',
            'tipo'              => 'required',
            'urgente'           => 'required'
        ]);

        Motivo::create([
            'descripcion'       => $request->descripcion,
            'tipo'              => $request->tipo,
            'urgente'           => $request->disponible
        ]);

        return redirect()->route('veterinaria.index');
    }


    public function show(Veterinaria $veterinaria)
    {
    return view ('veterinaria.show' , compact('veterinaria'));


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
        return redirect()->route('veterinaria.index');
    }
    public function datatable()
{
    $Veterinaria = Veterinaria::all();
    return view('veterinaria.datatable', compact('veterinaria'));
}

}

