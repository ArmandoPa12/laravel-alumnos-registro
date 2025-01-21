<?php

namespace App\Http\Controllers;

use App\Models\Colegio;
use App\Models\Gestion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
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
        $data = $request->validate(
            [
                'dato' => 'required|string|max:25',
                'id_colegio' => 'required|exists:colegio,id',
            ],
            [
                'dato.required' => 'El campo Gestion es obligatorio.',
                'dato.string' => 'El campo Gestion debe ser un texto válido.',
                'dato.max' => 'El campo Gestion no puede tener más de 25 caracteres.',
                //'dato.unique' => 'El valor del campo Gestion ya existe para este colegio.',
                'id_colegio.required' => 'El campo "id_colegio" es obligatorio.',
                'id_colegio.exists' => 'El colegio seleccionado no existe en la base de datos.',
            ]

        );

        Gestion::create([
            'dato' => $data['dato'],
            'id_colegio' => $data['id_colegio']
        ]);


        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gestion $gestion)
    {
        try {
            $cursos = $gestion->cursos;    
            // $gestiones = Gestion::where('id_colegio',$id)->get();
            // $colegio = Colegio::findOrFail($id);

            //dd($gestiones);
            return view('gestion.gestionShow',['cursos'=>$cursos, 'gestion' => $gestion]);
        } catch (\Throwable $th) {
            //throw $th;
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion $gestion):View
    {
        return view('gestion.gestionUpdate',['gestion'=> $gestion]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestion)
    {
        $gestion->update([
            'dato' => $request['dato']
        ]);
        return redirect()->route('colegio.edit',$gestion->id_colegio);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $gestion = Gestion::findOrFail($id);
            $gestion->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            dd($th);
        }
    }
}
