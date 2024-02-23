<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Dotacion;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DotacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dotacions= Dotacion::all();
        return view('admin.dotacions.index', compact('dotacions'));
    }


    public function pdf(){
        $dotacions = Dotacion::all();
         $pdf = Pdf::loadView('admin.dotacions.pdf', compact('dotacions'));
         return $pdf->stream();
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.dotacions.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['user_id'=>'required', 
            'pertrecho_id'=>'required', 
            ]
        );
        $dotacion = Dotacion::create($request->all());
        return redirect()->route('admin.dotacions.edit', $dotacion)->with('mensaje','Registrado correctamente');

    }

    /**
     * Display the specified resource.
     */
    public function show(Dotacion $dotacion)
    {
        return view('admin.dotacions.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dotacion $dotacion)
    {
        return view('admin.dotacions.edit', compact('dotacion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dotacion $dotacion)
    {
        $request->validate(
            ['user_id'=>'required', 
            'pertrecho_id'=>'required', 
            ]
        );
        $dotacion-> update($request->all());
        return redirect()->route('admin.dotacions.edit', $dotacion)->with('mensaje','Actualizado correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dotacion $dotacion)
    {
        $dotacion->delete();
        return redirect()->route('admin.dotacions.index')->with('mensaje','Registro eliminado correctamente');
    }
}
