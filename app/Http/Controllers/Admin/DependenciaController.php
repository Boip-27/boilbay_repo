<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Dependencia;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Validated;

class DependenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dependencias= Dependencia::all();
        return view('admin.dependencias.index', compact('dependencias'));
    }

    public function pdf(){
        $dependencias = Dependencia::all();
         $pdf = Pdf::loadView('admin.dependencias.pdf', compact('dependencias'));
         return $pdf->stream();
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dependencias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['provincia'=>'required', 
            'parroquia'=>'required', 
            'num_distrito'=>'required', 
            'cod_distrito'=>'required',
            'distrito'=>'required',
            'num_circuito'=>'required',
            'cod_circuito'=>'required',
            'circuito'=>'required',
            'num_subcircuito'=>'required',
            'cod_subcircuito'=>'required',
            'subcircuito'=>'required',
            'user_id'=>'id'
            ]
        );
        $dependencia = Dependencia::create($request->all());
        return redirect()->route('admin.dependencias.edit', $dependencia)->with('mensaje','Registrado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dependencia $dependencia)
    {
        return view('admin.dependencias.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dependencia $dependencia)
    {
        return view('admin.dependencias.edit', compact('dependencia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dependencia $dependencia)
    {
        //
        $request->validate(
            ['provincia'=>'required', 
            'parroquia'=>'required', 
            'num_distrito'=>'required', 
            'cod_distrito'=>'required',
            'distrito'=>'required',
            'num_circuito'=>'required',
            'cod_circuito'=>'required',
            'circuito'=>'required',
            'num_subcircuito'=>'required',
            'cod_subcircuito'=>'required',
            'subcircuito'=>'required',
            'user_id'=>'id']
        );
        $dependencia->update($request->all());
        return redirect()->route('admin.dependencias.edit',$dependencia)->with('mensaje','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dependencia $dependencia)
    {
        //
        $dependencia->delete();
        return redirect()->route('admin.dependencias.index')->with('mensaje','Registro eliminado correctamente');
    }
}
