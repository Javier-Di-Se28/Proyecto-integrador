<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Requests\StoreStatusRequest;
use App\Http\Requests\UpdateStatusRequest;

class StatusController extends Controller
{

    public function index()
    {
        return view('status.index')->with('status', Status::all());
    }


    public function create()
    {
        return view('status.create');
    }


    public function store(StoreStatusRequest $request)
    {
        $request->validate([
            'hora'                  => 'required',
            'dia'                   => 'required',
            'tratamiento'           => 'required',
            'observaciones'         => 'required'
        ]);

        Status::create([
            'hora'              => $request->hora,
            'dia'               => $request->dia,
            'tratamiento'       => $request->tratamiento,
            'observaciones'     => $request->obervaciones
        ]);

        return redirect()->route('status.index');
    }


    public function show(Status $status)
    {
        return view('status.show', compact('status'));
    }


    public function edit(Status $status)
    {
        return view('status.edit', compact('status'));
    }


    public function update(UpdatestatusRequest $request, Status $status)
    {
        $request->validate([
            'hora'                  => 'required',
            'dia'                   => 'required',
            'tratamiento'           => 'required',
            'observaciones'         => 'required'
        ]);

        $status->update($request->all());

        return redirect()->route('status.index');
    }


    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('status.index');
    }
}
