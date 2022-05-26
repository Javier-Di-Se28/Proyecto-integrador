<?php

namespace App\Http\Controllers;

use App\Models\Statu;
use App\Http\Requests\StorestatuRequest;
use App\Http\Requests\UpdatestatuRequest;

class StatuController extends Controller
{

    public function index()
    {
        return view('statu.index')->with('statu', Statu::all());
    }


    public function create()
    {
        return view('statu.create');
    }


    public function store(StorestatuRequest $request)
    {
        $request->validate([
            'hora'             => 'required',
            'dia'            => 'required',
            'tratamiento'       => 'required',
            'observaciones'              => 'required'
        ]);

        Statu::create([
            'hora'             => $request->hora,
            'dia'            => $request->dia,
            'tratamiento'       => $request->tratamiento,
            'observaciones'              => $request->observaciones
        ]);

        return redirect()->route('statu.index');
    }


    public function show(Statu $statu)
    {
        return view('statu.show', compact('statu'));
    }


    public function edit(Statu $statu)
    {
        return view('statu.edit', compact('statu'));
    }


    public function update(UpdatestatuRequest $request, Statu $statu)
    {
        $request->validate([
            'hora'             => 'required',
            'dia'            => 'required',
            'tratamiento'       => 'required',
            'observaciones'              => 'required'
        ]);

        $statu->update($request->all());

        return redirect()->route('statu.index');
    }


    public function destroy(Statu $statu)
    {
        $statu->delete();

        return redirect()->route('statu.index');
    }
}
