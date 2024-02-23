<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Mantenimiento;
use App\Models\Admin\Transporte;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Auth\Events\Validated;


class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $mantenimientos = new Mantenimiento;
        $users = User::all();
        $transportes = Transporte::all();
        return view('admin.mantenimientos.index', compact('mantenimientos','users','transportes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mantenimiento = new Mantenimiento();
        $users = User::pluck('id','name');
        return view('admin.mantenimientos.create', compact('mantenimiento', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mantenimiento = new Mantenimiento;
        $mantenimiento -> tipo=$request->input('tipo');
        $mantenimiento -> fecha=$request->input('fecha');
        $mantenimiento -> user_id=$request->input('user_id');
        $mantenimiento -> transporte_id=$request->input('transporte_id');
        $mantenimiento->save();



        /*$request->validate(
            [
                'name',
                'placa',
                'tipo',
                'fecha',
                'kilometraje',
                'user_id'
            ]
        );*/
        
        return redirect()->route('admin.mantenimientos.edit', $mantenimiento)->with('mensaje', 'Registrado correctamente');
    }
    public function pdf(){
        $mantenimientos =Mantenimiento::all();
         $pdf = Pdf::loadView('admin.mantenimientos.pdf', compact('mantenimientos'));
         return $pdf->stream();
     }

    /**
     * Display the specified resource.
     */
    public function show(Mantenimiento $mantenimiento)
    {
        //
        return view('admin.mantenimientos.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mantenimiento $mantenimiento)
    {
        //
        $users = User::all();
        $transportes = Transporte::all();
        return view('admin.mantenimientos.edit', compact('users', 'transportes'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mantenimiento $mantenimiento)
    {
        //
        $request->validate(
            [
                'name',
                'placa',
                'tipo',
                'fecha',
                'kilometraje'

            ]
        );
        $mantenimiento->update($request->all());
        return redirect()->route('admin.mantenimientos.edit', $mantenimiento)->with('mensaje', 'Actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mantenimiento $mantenimiento)
    {
        //
        $mantenimiento->delete();
        return redirect()->route('admin.mantenimientos.index')->with('mensaje', 'Registro eliminado correctamente');
    }
}
