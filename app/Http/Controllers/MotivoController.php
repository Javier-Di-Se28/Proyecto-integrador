<?php

namespace App\Http\Controllers;

use App\Models\Computadora;
use App\Http\Requests\StoreMotivoRequest;
use App\Http\Requests\UpdateMotivoRequest;
use League\CommonMark\Delimiter\Delimiter;

class MotivoController extends Controller
{

    public function index()
    {
        return view('computadoras.index')->with('computadoras', Computadora::all());
    }


    public function create()
    {
        return view('computadoras.create');
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

        return redirect()->route('computadora.index');
    }


    public function show(Computadora $computadora)
    {
    return view ('computadoras.show' , compact('computadora'));


    }


    public function edit(Computadora $computadora)
    {
        //
    }


    public function update(UpdateComputadoraRequest $request, Computadora $computadora)
    {
        //
    }


    public function destroy(Computadora $computadora)
    {
        $computadora->delete();
        return redirect()->route('computadora.index');
    }
    public function datatable()
{
    $Computadoras = Computadora::all();
    return view('computadoras.datatable', compact('computadoras'));
}

}

