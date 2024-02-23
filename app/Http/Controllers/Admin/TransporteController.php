<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Transporte;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Validated;

class TransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transportes=Transporte::all();
        return view('admin.transportes.index', compact('transportes'));
        
    }

    public function pdf(){
        $transportes = Transporte::all();
         $pdf = Pdf::loadView('admin.transportes.pdf', compact('transportes'));
         return $pdf->stream();
     }

    /**
     * Show the form for creating a new resource.
     * 
     *  @return \Illuminate\Http\Response
     */
    public function create()
    {
       
        return view('admin.transportes.create');
        
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
            ['tipo'=>'required', 
            'marca'=>'required', 
            'modelo'=>'required', 
            'placa'=>'required',
            'chasis'=>'required',
            'motor'=>'required',
            'kilometraje'=>'required',
            'cilindraje'=>'required',
            'carga'=>'required',
            'pasajeros'=>'required']
        );
        $transporte = Transporte::create($request->all());
        return redirect()->route('admin.transportes.edit', $transporte)->with('mensaje','Registrado correctamente');
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Transporte $transporte)
    {
        return view('admin.transportes.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transporte $transporte)
    {
        return view('admin.transportes.edit', compact('transporte'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transporte $transporte)
    {
        //
        $request->validate(
            ['tipo'=>'required', 
            'marca'=>'required', 
            'modelo'=>'required', 
            'placa'=>'required',
            'chasis'=>'required',
            'motor'=>'required',
            'kilometraje'=>'required',
            'cilindraje'=>'required',
            'carga'=>'required',
            'pasajeros'=>'required']
        );

        $transporte->update($request->all());
        return redirect()->route('admin.transportes.edit',$transporte)->with('mensaje','Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transporte $transporte)
    {
        //
        $transporte->delete();
        return redirect()->route('admin.transportes.index')->with('mensaje','Registro eliminado correctamente');
    }
}
