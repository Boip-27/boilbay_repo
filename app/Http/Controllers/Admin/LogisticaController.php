<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Logistica;
use Illuminate\Auth\Events\Validated;
use Barryvdh\DomPDF\Facade\Pdf;


class LogisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logisticas = Logistica::all();
        return view('admin.logisticas.index', compact('logisticas'));
    }
    public function pdf(){
       $logisticas = Logistica::all();
        $pdf = Pdf::loadView('admin.logisticas.pdf', compact('logisticas'));
        return $pdf->stream();
    }

    /**
     * Show the form for creating a new resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.logisticas.create');
    }

    /**
     * Store a newly created resource in storage.
     *  @param \Illuminate\Http\Request $request
     *  @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'nombre',
                'created_at',
                'categoria',
                'cantidad'
            ]
        );
        $logistica = Logistica::create($request->all());
        return redirect()->route('admin.logisticas.edit', $logistica)->with('mensaje', 'Registrado correctamente');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Logistica $logistica)
    {
        return view('admin.logisticas.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Logistica $logistica)
    {
        return view('admin.logisticas.edit', compact('logistica'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Logistica $logistica)
    {
        //
        $request->validate(
            [
                'nombre',
                'created_at',
                'categoria',
                'cantidad'
            ]
        );

        $logistica->update($request->all());
        return redirect()->route('admin.logisticas.edit', $logistica)->with('mensaje', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Logistica $logistica)
    {
        //
        $logistica->delete();
        return redirect()->route('admin.logisticas.index')->with('mensaje', 'Registro eliminado correctamente');
    }
}
