<?php

namespace App\Http\Controllers;

use App\Models\Duenio;
use App\Http\Requests\StoreDuenioRequest;
use App\Http\Requests\UpdateDuenioRequest;

class DuenioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDuenioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDuenioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function show(Duenio $duenio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function edit(Duenio $duenio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDuenioRequest  $request
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDuenioRequest $request, Duenio $duenio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Duenio  $duenio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Duenio $duenio)
    {
        //
    }
}