<?php

namespace App\Http\Controllers;

use App\Models\Veterinaria;
use Illuminate\Http\Request;

class VeterinariaController extends Controller
{
    
    public function index()
    {
        $datos ['veterinarias']=Veterinaria::paginate(7);
        return view('veterinaria.index',$datos);
    }

    
    public function create()
    {
        return view('veterinaria.create');
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    
      

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Animale  $animale
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
   
     
    }
    
}