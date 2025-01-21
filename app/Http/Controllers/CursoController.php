<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Persona;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        $datos = $request->validate([
            'nombre' => 'required|max:50',
            'paralelo' => 'required|max:50',
            'campo' => 'max:50',
            'idGestion' => ''
        ],[
            'nombre.required' => 'El nombre del curso es requerido',
            'nombre.max' => 'El nombre del curso tiene que ser solo de 50 letras',
            'paralelo.required' => 'El nombre del paralelo es requerido',
            'paralelo.max' => 'El nombre del paralelo tiene que ser solo de 50 letras',
        ]);

        Curso::create([
            'nombre' => $datos['nombre'],
            'paralelo' => $datos['paralelo'],
            'campo' => $datos['campo'],
            'id_gestion' => $datos['idGestion']
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso):View
    {
        $personas = Persona::where('id_curso',$curso->id)->get();

        //dd($personas);
        return view('curso.cursoShow',[
            'personas'=> $personas,
            'curso' => $curso
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Curso $curso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Curso $curso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->back();
    }
}
