<?php

namespace App\Http\Controllers;

use App\Models\medidas;
use App\Models\Persona;
use Illuminate\Http\Request;

class MedidaController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medidas  $medidas
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        dd($persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medidas  $medidas
     * @return \Illuminate\Http\Response
     */
    public function edit(medidas $medidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medidas  $medidas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, medidas $medidas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medidas  $medidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(medidas $medidas)
    {
        //
    }
}
