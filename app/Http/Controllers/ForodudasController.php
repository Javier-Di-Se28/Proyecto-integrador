<?php

namespace App\Http\Controllers;

use App\Models\Forodudas;
use App\Http\Requests\StoreForodudasRequest;
use App\Http\Requests\UpdateForodudasRequest;

class ForodudasController extends Controller
{

    public function index()
    {
        return view('forodudas.index')->with('forodudas', Forodudas::all());
    }


    public function create()
    {
        return view('forodudas.create');
    }


    public function store(StoreForodudasRequest $request)
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


    public function edit(Forodudas $forodudas)
    {
        return view('forodudas.edit', compact('forodudas'));
    }


    public function update(UpdateforodudasRequest $request, Forodudas $forodudas)
    {
        $request->validate([
            'nombre'            => 'required',
            'descripcion'       => 'required',
            'fechaPublicacion'  => 'required'
        ]);

        $forodudas->update($request->all());

        return redirect()->route('forodudas.index');
    }


    public function destroy(Forodudas $forodudas)
    {
        $forodudas->delete();

        return redirect()->route('forodudas.index');
    }
}
