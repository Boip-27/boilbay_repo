<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Asignacion;
use App\Models\Admin\Dependencia;
use App\Models\Admin\Transporte;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;

class AsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $asignacions = new Asignacion;
        return view('admin.asignacions.index', compact('asignacions'));
    }
    public function pdf(){
        $asignacion = new Asignacion;
        $pdf = Pdf::loadView('admin.asignacions.pdf', compact('asignacions'));
        return $pdf->stream();
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        $dependencias = Dependencia::all();
        $transportes = Transporte::all();
        $users = User::all();
        return view('admin.asignacions.create', compact('dependencias', 'transportes', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $asignacions = new Asignacion;
        $asignacions ->user_id=$request->input('name');
        $asignacions ->transporte_id=$request->input('placa');
        $asignacions ->dependencia_id=$request->input('circuito');
        $asignacions -> save();
        return redirect()->back()->with('mensaje', 'Guardado correctamente');

        /*
        $request->validate(
            [
                'name',
                'placa',
                'circuito'
            ]
        );
        $asignacion = Asignacion::create($request->all());
        return redirect()->route('admin.asignacions.edit', $asignacion)->with('mensaje', 'Registrado correctamente');*/
    }

    /**
     * Display the specified resource.
     */
    public function show(Asignacion $asignacion)
    {
        //
        return view('admin.asignacions.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asignacion $asignacion)
    {
        //
       
        $dependencias = Dependencia::all();
        $transportes = Transporte::all();
        $users = User::all();
        return view('admin.asignacions.edit', compact('dependencias', 'transportes', 'users'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Asignacion $asignacion)
    {
        //
        $request->validate(
            [
                'name',
                'placa',
                'circuito'
            ]
        );

        $asignacion->update($request->all());
        return redirect()->route('admin.asignacions.edit', $asignacion)->with('mensaje', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Asignacion $asignacion)
    {
        //
        $asignacion->delete();
        return redirect()->route('admin.asignacions.index')->with('mensaje', 'Registro eliminado correctamente');
    }
    public function getTransporte(Request $request)
    {
        
    }
}

