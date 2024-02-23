<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Pertrecho;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Validated;


class PertrechoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pertrechos = Pertrecho::all();
        return view('admin.pertrechos.index', compact('pertrechos'));
    }


    public function pdf(){
        $pertrechos = Pertrecho::all();
         $pdf = Pdf::loadView('admin.pertrechos.pdf', compact('pertrechos'));
         return $pdf->stream();
     }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pertrechos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            ['tipo_arma'=>'required', 
            'nombre'=>'required', 
            'descripcion'=>'required', 
            'codigo'=>'required',
            ]
        );
        $pertrechos = Pertrecho::create($request->all());
        return redirect()->route('admin.pertrechos.edit', $pertrechos)->with('mensaje','Registrado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pertrecho $pertrecho)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertrecho $pertrecho)
    {
        return view('admin.pertrechos.edit', compact('pertrecho'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pertrecho $pertrecho)
    {
        $request->validate(
            ['tipo_arma'=>'required', 
            'nombre'=>'required', 
            'descripcion'=>'required', 
            'codigo'=>'required',
            ]
        );
        $pertrecho->update($request->all());
        return redirect()->route('admin.pertrechos.edit', $pertrecho)->with('mensaje','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertrecho $pertrecho)
    {
        $pertrecho->delete();
        return redirect()->route('admin.pertrechos.index')->with('mensaje','Registro eliminado correctamente');
    }
}
