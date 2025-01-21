<?php

namespace App\Http\Controllers;

use App\Http\Requests\ColegioRequest;
use App\Http\Requests\ColegioUpdateRequest;
use App\Models\Colegio;
use App\Models\Gestion;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColegioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $datos = Colegio::all();
        $backend = 'esto viene del backend';
        return view('colegio.index',[
            'datos'=> $datos,
            'value' => $backend,
            'title' => 'Usuarios']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('colegio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColegioRequest $request):RedirectResponse
    {
        // dd($request);
        DB::beginTransaction();
        try {
            $colegio = Colegio::create($request->validated());
            //dd($colegio);
            
            Gestion::create([
                'dato' => $request->input('gestion'),
                'id_colegio'=> $colegio->id
            ]);            

            DB::commit();
            return redirect()->route('colegio.index')->with('success', 'Colegio creado exitosamente.');
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->withErrors('Hubo un error al crear el colegio y la gestión.');
        }
 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function show(Colegio $colegio)
    {
       //dd($colegio);
       try {
        $gestiones = Gestion::where('id_colegio',$colegio->id)->get();
        $colegio = Colegio::findOrFail($colegio->id);

        //dd($gestiones);
        return view('colegio.colegioShow',[
            'gestiones'=> $gestiones,
            'colegio'=>$colegio]);
    } catch (\Throwable $th) {
        //throw $th;
    }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function edit(Colegio $colegio)
    {
        try {
            $gestion = Gestion::where('id_colegio',$colegio->id)->get();
            return view('colegio.update',[
                'colegio'=>$colegio,
                'gestiones' => $gestion
            ]);
        } catch (\Throwable $th) {
            //dd($th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function update(ColegioUpdateRequest $request, Colegio $colegio):RedirectResponse
    {
        try {
            // Validar los datos de entrada
            // $validated = $request->validate([
            //     'nombre' => 'required|string|max:255',
            //     'direccion' => 'required|string|max:255',
            //     'campo' => 'required|string|max:255',
            // ]);
            // Actualizar los datos del colegio
            $colegio->update($request->validated());
    
            // Redirigir con un mensaje de éxito
            return redirect()->route('colegio.index')->with('success', 'Colegio actualizado correctamente.');
        } catch (\Throwable $th) {
            // Manejo de errores
            return back()->withErrors('Error al actualizar el colegio: ' . $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Colegio  $colegio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Colegio $colegio):RedirectResponse
    {
        try {
            // Eliminar el colegio
            $colegio->delete();
    
            // Redirigir con un mensaje de éxito
            return redirect()->route('colegio.index')->with('success', 'Colegio eliminado correctamente.');
        } catch (\Throwable $th) {
            // Manejo de errores
            return back()->withErrors('Error al eliminar el colegio: ' . $th->getMessage());
        }
    }
}
