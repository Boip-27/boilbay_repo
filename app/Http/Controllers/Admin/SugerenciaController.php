<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dependencia;
use App\Models\Admin\Sugerencia;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class SugerenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Sugerencia $sugerencia)
    {
    
        $sugerencias = Sugerencia::all();
        return view('admin.sugerencias.index', compact('sugerencias'));
    }

    public function pdf(){
        $sugerencias =Sugerencia::all();
         $pdf = Pdf::loadView('admin.sugerencias.pdf', compact('sugerencias'));
         return $pdf->stream();
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.sugerencias.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'tipo',
                'circuito',
                'subcircuito',
                'detalle',
                'apellido',
                'nombre',
                'telefono'
            ]
        );
        $sugerencia = Sugerencia::create($request->all());
        return redirect()->route('admin.sugerencias.index', $sugerencia)->with('mensaje', 'Registrado correctamente');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Sugerencia $sugerencia)
    {
        //
        return view('admin.sugerencias.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sugerencia $sugerencia)
    {
        //
        return view('admin.sugerencias.edit', compact('sugerencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sugerencia $sugerencia)
    {
        //
        $request->validate(
            [
                'tipo',
                'circuito',
                'subcircuito',
                'detalle',
                'apellido',
                'nombre',
                'telefono'
            ]
            );
            $sugerencia->update($request->all());
            return redirect()->route('admin.sugerencias.edit', $sugerencia)->with('mensaje', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sugerencia $sugerencia)
    {
        //
        $sugerencia->delete();
        return redirect()->route('admin.sugerencias.index')->with('mensaje', 'Registro eliminado correctamente');
    }
}
